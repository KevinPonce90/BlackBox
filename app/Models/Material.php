<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['costo', 'cantidadMaterial', 'tipoMaterial'];

    public function prendas()
    {
        return $this->belongsToMany(Prenda::class);
    }
}
 