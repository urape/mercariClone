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
use Illuminate\Support\Facades\Storage;

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
        $action = 'create';
        return view('sell.index', [
            'categories' => $categories,
            'statuses' => $statuses,
            'deliveries' => $deliveries,
            'areas' => $areas,
            'durations' => $durations,
            'action' => $action
        ]);
    }

    public function create(CreateItem $request)
    {
        $item = new Item();
        $item->name = $request->name;
        $item->explanation = $request->explanation;
        $item->price = $request->price;
        $file = $request->file('image');
        $path = Storage::disk('s3')->putFile('/', $file, 'public');
        $item->image = Storage::disk('s3')->url($path);
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

        return redirect()->route('item', $item->id);
    }

    public function edit($id)
    {
        //マスターからデータ取得
        $categories = Category::all();
        $statuses = Status::all();
        $deliveries = Delivery::all();
        $areas = Area::all();
        $durations = Duration::all();
        $action = 'update';
        $item = Item::find($id);
        return view('sell.edit', [
            'categories' => $categories,
            'statuses' => $statuses,
            'deliveries' => $deliveries,
            'areas' => $areas,
            'durations' => $durations,
            'action' => $action,
            'item' => $item
        ]);
    }

    public function update(CreateItem $request, $id)
    {
        $item = Item::find($id);
        $item->name = $request->name;
        $item->explanation = $request->explanation;
        $item->price = $request->price;
        Storage::delete($id . '.jpg');
        $request->image->storeAs('public/images/items', $id . '.jpg'); //画像再アップロード
        $item->status_id = $request->status;
        $item->name = $request->name;
        $item->category_id = $request->category;
        $item->delivery_id = $request->delivery;
        $item->area_id = $request->area;
        $item->duration_id = $request->duration;
        $item->save();

        return redirect()->route('item', $item->id);
    }
}
