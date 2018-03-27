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
            'name' => 'required|max:10|unique:products',
            'detail' => 'required',
            'price' => 'required|max:10',
            'stock' => 'required|max:3',
            'discount' => 'required|max:2'
        ];
    }

    public function messages() {
        return [
            'name.required' => 'You must fill up the name field',
            'name.max' => 'You must put atleast 255 letters',
        ];
    }
}
