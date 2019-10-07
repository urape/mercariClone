<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class TopController extends Controller
{
    public function index(Category $category)
    {
        $categories = $category->getCategories();
        return view('top', [
            'categories' => $categories
        ]);
    }
}
