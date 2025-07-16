<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DealStore extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'category_id',
        'events',
        'image',
        'description',
        'about_store',
        'how_to_apply',
        'faqs',
        'meta_title',
        'meta_keywords',
        'meta_description',
        'is_approved',
    ];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function offers()
    {
        return $this->hasMany(Offer::class, 'store_id');
    }
}
