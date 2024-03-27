<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Agence extends Model implements HasMedia
{
    use HasFactory, softDelete ,InteractsWithMedia;


    protected $fillable=
    [
        'name',
        'location',
        'type',
        'delete_at',
        'create_at',
        'update_at'

    ];
}
