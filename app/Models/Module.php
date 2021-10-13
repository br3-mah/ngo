<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    protected $fillable = [

        'disease_id',
        'name',
        'description',
        'slug',
        'status_id',
        'user_id',
        'team_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function disease()
    {
        return $this->belongsTo(Disease::class);
    }
}
