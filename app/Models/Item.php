<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Item extends Model
{
    // カテゴリーIDを持つ商品一覧取得
    public function getItems($category_id)
    {
        $items = $this->where('category_id', $category_id)
            ->select('id', 'name', 'price', 'created_at')
            ->get();
        return $items;
    }

    //商品詳細取得
    public function getItemDetail($id)
    {
        $item = $this->where('id', $id)
            ->select('id', 'name', 'explanation', 'price', 'user_id', 'status_id', 'image_id', 'category_id', 'delivery_id', 'area_id', 'duration_id')
            ->first();
        //金額にカンマをつける 
        $item['price'] = number_format($item['price']);
        return $item;
    }
}
