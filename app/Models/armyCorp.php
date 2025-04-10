<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArmyCorp extends Model
{
    use HasFactory;

    protected $fillable = ['denomination']; // <-- Agregar esta línea

    public function soldier()
    {
        return $this->hasOne('app\Models\soldier');
    }
}
