<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use Auth;

class BuyController extends Controller
{

    public function show($id)
    {
        $item = Item::find($id);
        return view('buy', [
            'item' => $item,
        ]);
    }

    public function update($id)
    {
        $item = Item::find($id);
        $item->buyer_id = Auth::id();
        $item->save();

        $message = '商品を購入しました';
        return redirect()->route('item', $item->id)->with('message', $message);
    }
}
