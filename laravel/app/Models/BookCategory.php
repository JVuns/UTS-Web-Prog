<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookCategory extends Model
{
    use HasFactory;
    protected $table = 'book_categories';
    protected $attributes = [
        // 'book_id',
        // 'category_id'
    ];

    public function Book(){
        return $this->belongsTo(Book::class,'book_id', 'id',);
    }

    public function Category(){
        return $this->belongsTo(Category::class);
    }

}
