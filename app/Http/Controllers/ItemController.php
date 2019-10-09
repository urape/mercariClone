<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Item;

class ItemController extends Controller
{
    public function show($id)
    {
        $categories = Category::all();
        $item = Item::find($id);
        return view('item', [
            'categories' => $categories,
            'item' => $item
        ]);
    }
}
