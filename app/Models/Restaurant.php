<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;
    public function categories()
    {
        return $this->hasMany(Category::class);
    }
    public function ratings()
    {
        return $this->belongsToMany(Rating::class);
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function getImageAttribute($value)
    {
        return asset("storage/{$value}");
    }
}
