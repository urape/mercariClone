<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
}
