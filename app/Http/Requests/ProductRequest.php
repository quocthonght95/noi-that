<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'description' => 'required',
            'unit_price' => 'required',
            'discount' => 'required',
            'image' => 'required',
            'note' => 'required',
            'size' => 'required',
            'guarantee' => 'required',
            'material' => 'required',
            'category_id' => 'required'
        ];
    }
}
