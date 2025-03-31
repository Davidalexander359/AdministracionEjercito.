<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class quarter extends Model
{
    use HasFactory;
    protected $fillable = ['name_quarter', 'location'];
    //protected $attributes = [
     //   'location' => 'Desconocida',  // Valor por defecto
    //];
    
    public function companies()
    {
        return $this->belongToMany('app\Models\company');
    }
    public function soldier()
    {
        return $this->hasOne('app\Models\soldier');
    }
}
