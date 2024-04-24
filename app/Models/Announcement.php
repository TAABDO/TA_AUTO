<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Announcement extends Model implements HasMedia
{
    use HasFactory , InteractsWithMedia ,SoftDeletes;

    protected $fillable =
    [
        'title',
        'description',
        'city',
        'price',
        'situation',
        'type',
        'status',
        'user_id',
        'car_id',
        'delete_at',
        'create_at',
        'update_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function car()
    {
        return $this->belongsTo(Car::class);
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
