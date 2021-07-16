<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'price', 'description', 'slug', 'quantity'
    ];


    public function galleries()
    {
        return $this->hasMany(ProductGallery::class, 'products_id', 'id');
        
    }
}
