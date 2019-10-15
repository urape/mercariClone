<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Item;

class TopController extends Controller
{
    public function index(Item $item)
    {
        $categories = Category::all();
        // 過去10日間の人気カテゴリー取得
        $pop_categories = $item->getPopCategories();

        return view('top', [
            'categories' => $categories,
            'pop_categories' => $pop_categories
        ]);
    }
}
