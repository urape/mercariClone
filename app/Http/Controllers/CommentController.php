<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CreateComment;
use App\Models\Comment;

class CommentController extends Controller
{
    public function create(CreateComment $request)
    {
        $comment = new Comment();
        $comment->comment = $request->comment;
        $comment->user_id = Auth::id();
        $comment->item_id = $request->item_id;
        $comment->save();

        return redirect()->route('item', $request->item_id);
    }
}
