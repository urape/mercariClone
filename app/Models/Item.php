<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Item extends Model
{
    // 過去10日間の人気カテゴリー取得
    public function getPopCategories()
    {
        $date = Carbon::now();
        $pop_categories = Item::select(DB::raw('count(*) as count'), 'category_id')
            ->where('created_at', '>=', $date->subDay(10))
            ->groupBy('category_id')
            ->orderBy('count', 'desc')
            ->limit(4)
            ->get();

        // 取得したカテゴリに属する商品を取得
        foreach ($pop_categories as $value) {
            $value['items'] = Item::where('category_id', $value->category_id)
                ->orderBy('created_at', 'desc')
                ->limit(10)->get();
        }

        return $pop_categories;
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function status()
    {
        return $this->belongsTo('App\Models\Status');
    }

    public function delivery()
    {
        return $this->belongsTo('App\Models\Delivery');
    }

    public function duration()
    {
        return $this->belongsTo('App\Models\Duration');
    }

    public function area()
    {
        return $this->belongsTo('App\Models\Area');
    }
}
