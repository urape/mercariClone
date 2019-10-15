<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Category;
use App\Models\Item;

class TopController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        // 過去10日間の人気カテゴリー取得
        $pop_categories = Item::getPopCategories();

        return view('top', [
            'categories' => $categories,
            'pop_categories' => $pop_categories
        ]);
    }
}
