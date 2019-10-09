<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateItem extends FormRequest
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
            'category' => 'required',
            'status' => 'required',
            'delivery' => 'required',
            'area' => 'required',
            'duration' => 'required',
            'price' => 'required|integer'
        ];
    }

    public function attributes()
    {
        return [
            'name' => '商品名',
            'explanation' => '商品の説明',
            'category' => 'カテゴリー',
            'status' => '商品の状態',
            'delivery' => '配送料の負担',
            'area' => '発送元の地域',
            'duration' => '発送までの日数',
            'price' => '価格'
        ];
    }
}
