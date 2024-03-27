<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Annoncement extends Model implements HasMedia
{
    use HasFactory , softDelete ,InteractsWithMedia;



    protected $fillable=
    [
        'titel',
        'description',
        'price',
        'datePublication',
        'model',
        'situation',
        'seats',
        'km',
        'type',
        'status',
        'user_id',
        'delete_at',
        'create_at',
        'update_at'
    ];

    public function car()
    {
        return $this->hasMany(Car::class);
    }
}
