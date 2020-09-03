<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
    
    protected $fillable = [
     'brand_phone', 'model_phone', 'storage', 'harga', 'branch', 'user', 'image'
    ];
}
