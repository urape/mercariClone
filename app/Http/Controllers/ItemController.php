<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Like;

class ItemController extends Controller
{
    public function show($id)
    {
        $categories = Category::all();
        $item = Item::find($id);
        $comments = Comment::where('item_id', $id)->get();
        $likes = Like::where('item_id', $id)->count();
        return view('item.index', [
            'categories' => $categories,
            'item' => $item,
            'comments' => $comments,
            'likes' => $likes
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
