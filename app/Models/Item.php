<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
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
