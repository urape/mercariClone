<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Item;
use App\Models\User;

class ItemController extends Controller
{
    public function show($id)
    {
        $categories = Category::all();
        $item = Item::find($id);
        // $user = User::find($item->user_id);
        return view('item', [
            'categories' => $categories,
            'item' => $item,
            // 'user' => $user,
        ]);
    }
}
