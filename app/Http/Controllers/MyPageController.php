<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Auth;
use App\Models\Item;

class MyPageController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $user = Auth::user();
        return view('mypage.index', [
            'categories' => $categories,
            'user' => $user,
        ]);
    }

    public function exhibiting()
    {
        $categories = Category::all();
        $user = Auth::user();
        $items = Item::where('user_id', $user->id)
            ->whereNull('buyer_id')
            ->orderBy('id', 'desc')
            ->get();
        return view('mypage.exhibiting', [
            'categories' => $categories,
            'user' => $user,
            'items' => $items
        ]);
    }

    public function progress()
    {
        $categories = Category::all();
        $user = Auth::user();
        return view('mypage.progress', [
            'categories' => $categories,
            'user' => $user,
        ]);
    }

    public function completed()
    {
        $categories = Category::all();
        $user = Auth::user();
        $items = Item::where('user_id', $user->id)
            ->whereNotNUll('buyer_id')
            ->orderBy('id', 'desc')
            ->get();
        return view('mypage.completed', [
            'categories' => $categories,
            'user' => $user,
            'items' => $items
        ]);
    }

    public function email_password()
    {
        $categories = Category::all();
        $user = Auth::user();
        return view('mypage.email_password', [
            'categories' => $categories,
            'user' => $user,
        ]);
    }
}
