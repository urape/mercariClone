<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Category;
use App\Models\User;

class ItemController extends Controller
{
    public function show($id)
    {
        $categories = Category::all();
        $item = Item::find($id);
        return view('item.index', [
            'categories' => $categories,
            'item' => $item,
        ]);
    }

    public function delete(Request $request)
    {
        $item = Item::find($request->item_id);
        $item->delete();

        $message = '商品を削除しました';
        return redirect()->route('mypage')->with('message', $message);
    }
}
