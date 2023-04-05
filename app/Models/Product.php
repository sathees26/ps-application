<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'url_slug', 'seo_title', 'description', 'category_id', 'price', 'image'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
