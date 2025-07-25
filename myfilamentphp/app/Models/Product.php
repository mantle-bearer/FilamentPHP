<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'brand_id', 'column_id', 'name', 'slug', 'sku', 'image', 'description', 'quantity', 'price', 'is_visible', 
        'is_featured', 'type', 'published_at'
    ];

    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }

    public function category(): BelongsToMany
    {
        return $this->belongsToMany(Category::class)->withTimestamps();
    }
}
