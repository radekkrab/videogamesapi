<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Videogame extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 
        'developer_id',
    ];

    public function developer() {
        return $this->belongsTo(Developer::class, 'developer_id');
    }

    public function genre() {
        return $this->belongsToMany(Genre::class, 'genre_videogame', 'videogame_id', 'genre_id');
    }

}
