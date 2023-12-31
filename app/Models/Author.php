<?php

namespace App\Models;

use App\Models\Book;
use App\Models\Image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Author extends Model
{
    use HasFactory;
    public function books()
    {
        return $this->hasMany(Book::class);
    }

    public function image(): MorphOne
    {
        return $this->morphOne(Image::class,'imageable');
    }

}
