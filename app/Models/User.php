<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class User extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia ,SoftDeletes;

    protected $fillable = [
        'name',
        'email',
        'password',
        'adresse',
        'Phone',
        'status',
        'delete_at',
        'create_at',
        'update_at',

    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function agence()
    {
        return $this->belongsTo(Agence::class);
    }

    public function cars()
    {
        return $this->hasMany(Car::class);
    }
}
