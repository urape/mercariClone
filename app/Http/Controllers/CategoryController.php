<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Item;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('category', [
            'categories' => $categories,
        ]);
    }

    public function show($id)
    {
        $categories = Category::all();
        $category_name = Category::find($id);
        $items = Item::where('category_id', $id)
            ->orderBy('id', 'desc')
            ->get();
        return view('category_details', [
            'categories' => $categories,
            'category_name' => $category_name,
            'items' => $items
        ]);
    }
}
