<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

class CategoryController extends Controller
{
    // 一覧表示
    public function index(Category $category)
    {
        $categories = $category->getCategories();
        return view('category', [
            'categories' => $categories
        ]);
    }
}
