<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    public function soldados()
    {
        return $this->belongToMany('app\Models\soldier');
    }
}
