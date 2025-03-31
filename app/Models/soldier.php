<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class soldier extends Model
{
    public function services()
    {
        return $this->belongToMany('app\Models\service');
    }
    public function armyCorps()
    {
        return $this->belongsTo('app\Models\armyCorp');
    }
    public function quarter()
    {
        return $this->belongsTo('app\Models\quarter');
    }
    public function companies()
    {
        return $this->belongsTo('app\Models\company');
    }
   
}
