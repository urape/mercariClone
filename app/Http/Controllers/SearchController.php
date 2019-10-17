<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Item;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::all();
        // 検索対象取得
        $keyword = $request->keyword;
        // 検索クエリ作成
        $query = $this->createQuery($keyword, $request);
        $items = $query->paginate(10);
        return view('search.index', [
            'categories' => $categories,
            'keyword' => $keyword,
            'items' => $items,
            'request' => $request
        ]);
    }

    // 選択された検索条件を元にクエリを作成する
    private function createQuery($keyword, $request)
    {
        $query = Item::where('name', 'LIKE', "$keyword%");

        if($request->sort){
            switch ($request->sort) {
                case 'price_asc':
                    $query->orderBy('price', 'asc');
                    break;
                case 'price_desc':
                    $query->orderBy('price', 'desc');
                    break;
                case 'created_asc':
                    $query->orderBy('created_at', 'asc');
                    break;
                case 'created_desc':
                    $query->orderBy('created_at', 'desc');
                    break;
            }
        }

        if ($request->category) {
            $query->where('category_id', $request->category);
        }

        if ($request->price) {
            switch ($request->price) {
                case '300-1000':
                    $query->whereBetween('price', [300, 1000]);
                    break;
                case '1000-5000':
                    $query->whereBetween('price', [1000, 5000]);
                    break;
                case '5000-10000':
                    $query->whereBetween('price', [5000, 10000]);
                    break;
                case '10000-30000':
                    $query->whereBetween('price', [10000, 30000]);
                    break;
                case '30000-50000':
                    $query->whereBetween('price', [30000, 50000]);
                    break;
                case '50000':
                    $query->where('price', '>=', 50000);
                    break;
            }
        }
        return $query;
    }
}
