<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Item;

class CategoryController extends Controller
{
    // 全カテゴリ取得
    public function index(Category $category)
    {
        $categories = $category->getCategories();
        return view('category', [
            'categories' => $categories
        ]);
    }

    public function show(Category $category, Item $item, $id)
    {
        $categories = $category->getCategories();
        $category_name = $category->getCategoryName($id);
        $items = $item->getItems($id);
        return view('category_details', [
            'categories' => $categories,
            'category_name' => $category_name,
            'items' => $items
        ]);
    }
}
