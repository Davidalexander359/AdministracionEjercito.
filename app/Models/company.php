<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = ['activity_company'];
    public function quearters()
    {
        return $this->belongToMany('app\Models\quarter');
    }
    public function soldier()
    {
        return $this->hasMany('app\Models\soldier');
    }
}