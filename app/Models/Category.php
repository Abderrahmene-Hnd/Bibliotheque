<?php

namespace App\Models;

use App\Models\Book;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Staudenmeir\LaravelAdjacencyList\Eloquent\HasRecursiveRelationships;

class Category extends Model
{
    use HasFactory;
    use HasRecursiveRelationships;
    
    public function books(): BelongsToMany
    {
        return $this->belongsToMany(Book::class,'book_categories','category_id','book_id');
    }
    public function image(): MorphOne
    {
        return $this->morphOne(Image::class,'imageable');
    }
}
