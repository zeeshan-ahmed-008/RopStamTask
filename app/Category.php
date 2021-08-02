<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'image',
        'name'
    ]; 

    Public function Product(){
        return $this->hasMany('App\Product');
    }
}
