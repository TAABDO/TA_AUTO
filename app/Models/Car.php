<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Car extends Model implements HasMedia
{
    use HasFactory, softDelete ,InteractsWithMedia;


    protected $fillable = [
        'name',
        'price',
        'color',
        'model',
        'Phone',
        'status',
        'delete_at',
        'create_at',
        'update_at'

    ];

    public function brand()
    {
        return $this->belongTo(Brand::class);
    }
    public function annoncement()
    {
        return $this->belongTo(Annoncement::class);
    }
}
