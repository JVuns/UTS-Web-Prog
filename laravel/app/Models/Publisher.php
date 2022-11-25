<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    use HasFactory;

    protected $attributes = [
        // 'name',
        // 'address',
        // 'phone',
        // 'email',
        // 'image'
    ];

    public function Books(){
        return $this->hasMany(Book::class);
    }

}
