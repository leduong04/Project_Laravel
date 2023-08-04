<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';

    protected $fillable = [
        'product_name',
        'category_id',
        'brand_id',
        'long_description',
        'short_description',
        'price',
        'quantity',
        'featured',
        'product_status',
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function brand()
    {
        return $this->belongsTo('App\Models\Brand');
    }

    public function image()
    {
        return $this->hasMany('App\Models\Image');
    }
}
