<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// カテゴリーIDを持つ商品一覧取得
class Item extends Model
{
    public function getItems($category_id)
    {
        $items = $this->where('category_id', $category_id)->select('id', 'name', 'price', 'created_at')->get()->toArray();
        return $items;
    }
}
