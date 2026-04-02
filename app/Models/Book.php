<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['title','author','isbn','published_year','available_copies','total_copies'];

    public function borrows()
    {
        return $this->hasMany(Borrow::class);
    }
}
