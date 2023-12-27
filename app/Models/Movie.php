<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public function scopeCatagory($query, $catagory) {
        $query->where('catagory', 'like', '%'. $catagory .'%')->orWhere('catagory',  '');
    }
    protected $fillable = [
        'movie_name',
        'catagory',
        'rating',
        'movie_image',
        'description'
    ];
    use HasFactory;
}
