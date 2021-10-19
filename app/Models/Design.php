<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Design extends Model
{
    use HasFactory;

    const ACTIVA = 1;
    const INACTIVA = 0;

    protected $fillable = ['name', 'estado'];

    //relacion muchos a muchos
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
