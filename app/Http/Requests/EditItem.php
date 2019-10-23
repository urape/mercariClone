<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditItem extends FormRequest
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
            'name' => 'required|max:40',
            'explanation' => 'required|max:1000',
            'image' => 'sometimes|file|image|mimes:jpeg,png,jpg|max:2048',
            'category' => 'required',
            'status' => 'required',
            'delivery' => 'required',
            'area' => 'required',
            'duration' => 'required',
            'price' => 'required|integer'
        ];
    }
}
