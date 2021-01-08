<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Author;
use App\Models\User;

class Book extends Model
{
    use HasFactory;

    public function author() {
        return $this->belongsTo(Author::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
