<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $attributes = [
        // 'publisher_id',
        // 'title',
        // 'author',
        // 'year',
        // 'synopsis',
        // 'image'
    ];

    public function Publisher(){
        return $this->belongsTo(Publisher::class);
    }

    public function BookCategories(){
        return $this->hasMany(BookCategory::class);
    }

}
