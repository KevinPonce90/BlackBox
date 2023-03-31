<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Prenda extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['tipo', 'color', 'talla', 'costo']; //Declaramos las columnas que el usuario vaya a modificar
}
