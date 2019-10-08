<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Item;

class ItemController extends Controller
{
    public function show(Category $category, Item $item, $id)
    {
        $categories = $category->getCategories();
        $item = $item->getItemDetail($id);
        return view('item', [
            'categories' => $categories,
            'item' => $item
        ]);
    }
}
