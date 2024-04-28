<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordcontract;
use Laravel\Sanctum\HasApiTokens;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable  implements HasMedia  , CanResetPasswordcontract
{
    use HasFactory, InteractsWithMedia ,SoftDeletes ,  AuthenticatableTrait, HasApiTokens , Notifiable;

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
    public function isAdmin()
    {
        // Check if the user has any role that qualifies them as an admin
        return $this->roles()->where('name', 'admin')->exists();
    }

    public function isClient()
    {
        // Check if the user has any role that qualifies them as a client
        return $this->roles()->where('name', 'client')->exists();
    }
    public function isAnnouncer()
    {
        // Check if the user has any role that qualifies them as an announcer
        return $this->roles()->where('name', 'announcer')->exists();
    }
    
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

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
