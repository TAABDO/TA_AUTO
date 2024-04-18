<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Announcement extends Model implements HasMedia
{
    use HasFactory , SoftDeletes ,InteractsWithMedia;



    protected $fillable =
    [
        'title',
        'description',
        'price',
        'situation',
        'type',
        'status',
        'user_id',
        'delete_at',
        'create_at',
        'update_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function cars()
    {
        return $this->hasMany(Car::class);
    }
}
