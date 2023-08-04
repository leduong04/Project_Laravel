<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'image';

    protected $fillable = [
        'id',
        'img_link',
        'product_id',
    ];

    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }
}

