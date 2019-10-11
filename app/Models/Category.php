<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    public function items()
    {
        return $this->hasMany('App\Models\Item');
    }

    public function sub_categories()
    {
        return $this->hasMany('App\Models\SubCategory', 'parent_id', 'id');
    }
}
