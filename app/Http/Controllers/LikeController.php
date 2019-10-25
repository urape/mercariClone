<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Like;

class LikeController extends Controller
{
    public function create(Request $request)
    {
        // 自分がいいねしているか判定
        $user_id = Auth::id();
        $item_id = $request->item_id;
        $count = Like::where('user_id', $user_id)->where('item_id', $item_id)->count();
        if ($count === 0) {
            $like = new Like();
            $like->user_id = $user_id;
            $like->item_id = $request->item_id;
            $like->save();
            $liked = TRUE;
        } else {
            Like::where('user_id', $user_id)->where('item_id', $item_id)->delete();
            $liked = FALSE;
        }

        // いいね総数取得
        $likes = Like::where('item_id', $item_id)->count();

        return response()->json([
            'liked' => $liked,
            'likes' => $likes
        ]);
    }
}
