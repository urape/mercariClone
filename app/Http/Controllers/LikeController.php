<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Like;

class LikeController extends Controller
{
    public function create(Request $request)
    {
        $like = new Like();
        $like->user_id = Auth::id();
        $like->item_id = $request->item_id;
        $like->save();
        
        return response()->json([
            'code' => '成功',
            'item' => $request->item_id
        ]);
    }
}
