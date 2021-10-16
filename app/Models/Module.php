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
        return $this->belongsTo(User::class, 'user_id');
    }

    public function team()
    {
        return $this->belongsTo(Team::class, 'team_id');
    }

    public function diseases()
    {
        return $this->belongsTo(Disease::class, 'disease_id');
    }

    public function intervensions()
    {
        return $this->hasMany(Intervension::class);
    }

    public static function total_modules(){
        return Module::get()->count();
    }
}
