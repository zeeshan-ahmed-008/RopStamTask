<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    protected $fillable = [
        'image',
        'product_id'
    ]; 

    Public function Product(){
        return $this->belongsTo('App\Product')->withDefault();
    }
}
