<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class User extends Model implements HasMedia
{
    use HasFactory, softDelete ,InteractsWithMedia;


    protected $fillable = [
        'name',
        'email',
        'password',
        'adresse',
        'Phone',
        'status',
        'delete_at',
        'create_at',
        'update_at'

    ];


        public function roles()
        {
            return $this->belongsToMany(Role::class);
        }
}
