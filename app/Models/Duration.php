<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Duration extends Model
{
    public function items()
    {
        return $this->hasMany('App\Models\item');
    }
}
