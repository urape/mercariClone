<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class TopController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('top', [
            'categories' => $categories
        ]);
    }
}
