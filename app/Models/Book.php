<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Author;

class Book extends Model
{
    use HasFactory;

    protected $table = 'books';

    protected $fillable = ['title', 'author_id', 'published_at'];

    public function author(){
        return $this->belongsTo(Author::class);
    }
}
