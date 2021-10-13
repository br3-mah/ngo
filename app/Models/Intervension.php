<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intervension extends Model
{
    use HasFactory;

    protected $fillable = [
        'module_id',
        'name',
        'description',
        'type',
        'slug',
        'status_id',
        'team_id',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
