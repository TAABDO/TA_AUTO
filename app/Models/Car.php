<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Car extends Model implements HasMedia
{
    use HasFactory, SoftDeletes ,InteractsWithMedia;


    protected $fillable = [
        'color',
        'model',
        'seat',
        'km',
        'year',
        'condition',
        'transmission',
        'fuel_type',
        'engine_capacity',
        'brand_id',
        'delete_at',
        'create_at',
        'update_at'

    ];

    public function announcement()
    {
        return $this->hasOne(Announcement::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
