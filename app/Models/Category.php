<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    //campos que queremos llenar por asignacion masiva
    protected $fillable = ['name', 'slug', 'image', 'icon'];

    //relacion uno a muchos
    public function subcategories()
    {
        // return $this->hasMany('App\Models\Subcategory');
        return $this->hasMany(Subcategory::class);
    }
    //relacion uno a muchos atravez de
    public function products()
    {
        return $this->hasManyThrough(Product::class, Subcategory::class);
    }

    //relacion muchos a muchos
    public function brands()
    {
        return $this->belongsToMany(Brand::class);
    }

    //Url amigables
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
