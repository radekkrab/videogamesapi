<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class Videogame extends Model
{
    use HasFactory, LogsActivity;

    protected $fillable = [
        'title',
        'developer_id',
    ];

    public function developer()
    {
        return $this->belongsTo(Developer::class, 'developer_id');
    }

    public function genre()
    {
        return $this->belongsToMany(Genre::class, 'genre_videogame', 'videogame_id', 'genre_id');
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly(['title', 'developer_id'])
            ->useLogName('videogames')
            ->setDescriptionForEvent(fn(string $eventName) => "The videogame has been {$eventName}");
    }
}
