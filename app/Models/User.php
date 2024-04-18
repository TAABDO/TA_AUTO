<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Model implements HasMedia ,Authenticatable
{
    use HasFactory, InteractsWithMedia ,SoftDeletes ,  AuthenticatableTrait;

    protected $fillable = [
        'fullname',
        'email',
        'password',
        'address',
        'phone',
        'status',
        'agence_id',
        'deleted_at',
        'created_at',
        'updated_at',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function agence()
    {
        return $this->belongsTo(Agence::class);
    }

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }

    public function announcements()
    {
        return $this->hasMany(Announcement::class);
    }
}
