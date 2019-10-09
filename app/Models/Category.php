<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // ,親に子を含めたカテゴリー取得
    public function getCategories()
    {
        // 親カテゴリー取得
        $parent_categories = $this->whereNULL('parent_id')->select('id', 'name')->get()->toArray();
        // 親カテゴリーに子カテゴリーを追加
        foreach ($parent_categories as $category) {
            $sub_categories = $this->where('parent_id', $category['id'])->select('id', 'name')->get()->toArray();
            $category['child'] = $sub_categories;
            $all_categories[] = $category;
        }
        return $all_categories;
    }
}
