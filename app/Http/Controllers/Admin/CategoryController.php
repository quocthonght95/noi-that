<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\CategoryRepository;
use App\Http\Requests\CategoryRequest;
use Sesstion;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->category_repository = new CategoryRepository;
    }

    public function getCreate()
    {

        return view('admin.categories.add');
    }

    public function show()
    {
        $cate = $this->category_repository->getPaginate(10);

        return view('admin.categories.show', compact('cate'));
    }

    public function postCreate(CategoryRequest $request)
    {
        $data = [
            'name' => $request->name,
            'slug' => str_slug($request->name)
        ];
        $result = $this->category_repository->store($data);
        if($result)
        {

            return redirect()->route('admin.category.show')->with('success', 'Create success');
        }
        else{

            return redirect()->back()->with('error', 'Create fail');
        }
    }

    public function getEdit($slug)
    {
        $cate = $this->category_repository->getBySlug($slug);

        return view('admin.categories.edit', compact('cate'));
    }

    public function postEdit(CategoryRequest $request, $id)
    {
        $data = [
            'name' => $request->name,
            'slug' => str_slug($request->name)
        ];

        $result = $this->category_repository->update($id, $data);
        if($result)
        {

            return redirect()->route('admin.category.show')->with('success', 'Update success');
        }else{

            return redirect()->back();
        }
    }

    public function destroy($slug)
    {
        $result = $this->category_repository->destroyBySlug($slug);
        if($result)
        {

            return redirect()->route('admin.category.show')->with('success', 'Delete success');
        }
        else{

            return redirect()->route('admin.categories.show');
        }
    }
}
