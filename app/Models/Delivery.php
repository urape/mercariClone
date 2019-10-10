<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    public function items()
    {
        return $this->hasMany('App\Models\item');
    }
}
