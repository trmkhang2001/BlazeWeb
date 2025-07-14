<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'category_id',
        'original_price',
        'price',
        'url',
        'image',
        'is_approved',
        'short_description',
        'meta_title',
        'meta_keywords',
        'meta_description'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
