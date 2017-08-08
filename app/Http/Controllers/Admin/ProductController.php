<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\ProductRepository;
use App\Repositories\CategoryRepository;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\Storage;
use Image;
use File;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->product_reposytory = new ProductRepository;
        $this->category_reposytory = new CategoryRepository;
    }

    public function getCreate()
    {
        $cate = $this->category_reposytory->getAll();
        return view('admin.products.add', compact('cate'));
    }

    public function show()
    {
        $product = $this->product_reposytory->getPaginate(10);

        return view('admin.products.show', compact('product'));
    }

    public function postCreate(ProductRequest $request)
    {

        if($request->hasFile('image')){


            $avatar = $request->file('image');

            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(700,850)->save(public_path('/photos/product'.$filename));
            $img = ('/photos/product'.$filename);
            $data = [
                'name' => $request->name,
                'slug' => str_slug($request->name),
                'description' => $request->description,
                'unit_price' => $request->unit_price,
                'discount' => $request->discount,
                'image' => $img,
                'note' => $request->note,
                'size' => $request->size,
                'guarantee' => $request->guarantee,
                'material' => $request->material,
                'category_id' => $request->category_id
            ];
            $result = $this->product_reposytory->store($data);
            if($result)
            {

                return redirect()->route('admin.products.show')->with('success', 'add success');
            }else{

                return redirect()->back()->with('error', 'fail add');
            }
        }
    }
    public function getEdit($slug)
    {
        $product = $this->product_reposytory->getBySlug($slug);
        $cate = $this->category_reposytory->getAll();
        return view('admin.products.edit', compact('product', 'cate'));
    }

    public function postEdit(ProductRequest $request, $id)
    {
        if($request->hasFile('image')){


            $avatar = $request->file('image');

            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(700,850)->save(public_path('/photos/product'.$filename));
            $img = ('/photos/product'.$filename);
            $data = [
                'name' => $request->name,
                'slug' => str_slug($request->name),
                'description' => $request->description,
                'unit_price' => $request->unit_price,
                'discount' => $request->discount,
                'image' => $img,
                'note' => $request->note,
                'size' => $request->size,
                'guarantee' => $request->guarantee,
                'material' => $request->material,
                'category_id' => $request->category_id
            ];
            $result = $this->product_reposytory->update($id, $data);
            if($result)
            {

                return redirect()->route('admin.products.show')->with('success', 'update success');
            }else{

                return redirect()->back()->with('error', 'fail update');
            }
        }
    }

    public function destroy($slug)
    {
        $result = $this->product_reposytory->destroyBySlug($slug);
        if($result)
        {
            return redirect()->back()->with('success', 'delete success');
        }else{
            return redirect()->back()->with('error', 'fail delete');
        }
    }
}
