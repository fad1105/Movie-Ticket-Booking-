<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'movie_name',
        'language',
        'trailer_link',
        'cinema_tags',
        'genres',
        'release_date',
        'duration',
    ];

    use HasFactory;
}
