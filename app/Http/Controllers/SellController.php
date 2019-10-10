<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CreateItem;
use Carbon\Carbon;
use App\Models\Item;
use App\Models\Category;
use App\Models\Status;
use App\Models\Delivery;
use App\Models\Area;
use App\Models\Duration;

class SellController extends Controller
{
    public function index()
    {
        //マスターからデータ取得
        $categories = Category::all();
        $statuses = Status::all();
        $deliveries = Delivery::all();
        $areas = Area::all();
        $durations = Duration::all();
        return view('sell', [
            'categories' => $categories,
            'statuses' => $statuses,
            'deliveries' => $deliveries,
            'areas' => $areas,
            'durations' => $durations
        ]);
    }

    public function create(CreateItem $request)
    {
        $item = new Item();
        $item->name = $request->name;
        $item->explanation = $request->explanation;
        $item->price = $request->price;
        $next_id =  $item->max('id') + 1;
        $request->image->storeAs('public/images/items', $next_id . '.jpg'); //画像アップロード
        $item->image = $next_id . '.jpg';
        $item->user_id = Auth::id();
        $item->status_id = $request->status;
        $item->name = $request->name;
        $item->category_id = $request->category;
        $item->delivery_id = $request->delivery;
        $item->area_id = $request->area;
        $item->duration_id = $request->duration;
        $item->created_at = Carbon::now();
        $item->updated_at = Carbon::now();
        $item->save();

        return redirect()->route('top');
    }
}
