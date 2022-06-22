<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    protected $table = 'author';
    protected $fillable = [
        'slug',
        'name'
    ];

    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
