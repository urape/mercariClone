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

    public function show($id)
    {
        $categories = Category::all();
        $category_name = Category::find($id);
        $items = Item::where('category_id', $id)
            ->get();
        return view('category_details', [
            'categories' => $categories,
            'category_name' => $category_name,
            'items' => $items
        ]);
    }
}
