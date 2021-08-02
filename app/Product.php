<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'image',
        'name',
        'category_id',
        'currency',
        'price',
        'rent_type',
        'average_ratings',
        'total_ratings',
        'total_reviews',
        'refundable',
        'coupon_code',
        'size',
        'tenure'
    ]; 

    Public function Category(){
        return $this->belongsTo('App\Category')->withDefault();
    }

    Public function ProductImage(){
        return $this->hasMany('App\ProductImage');
    }
}
