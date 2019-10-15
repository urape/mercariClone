<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Auth;

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
