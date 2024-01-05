<?php

namespace App\Models;

use App\Models\Image;
use App\Models\Author;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Book extends Model
{
    use HasFactory;
    public function categories(): BelongsToMany
    {
        return $this->belongToMany(Category::class,'book_categories','book_id', 'category_id');
    }
    public function author()
    {
        return $this->belongsTo(Author::class);
    }
    public function image(): MorphOne
    {
        return $this->morphOne(Image::class,'imageable');
    }
}
