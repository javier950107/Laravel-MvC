<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Book;

class Author extends Model
{
    use HasFactory;

    protected $table = 'authors';
    protected $fillable = ['name'];

    public function books(){
        return $this->hasMany(Book::class);
    }
}
