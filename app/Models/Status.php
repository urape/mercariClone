<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{

    // 全商品状態取得
    public function getStatuses()
    {
        $statuses = $this->select('id', 'name')->get();
        return $statuses;
    }
}
