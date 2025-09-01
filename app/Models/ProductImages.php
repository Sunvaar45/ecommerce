<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImages extends Model
{
    use HasFactory;

    protected $table = 'product_images';

    protected $fillable = [
        'product_id',
        'image_url',
        'image_alt',
        'sort_order',
        'is_main',
        'status',
    ];

    public function product()
    {
        return $this->belongsTo(Products::class, 'product_id');
    }
}
