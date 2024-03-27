<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Brand extends Model implements HasMedia
{
    use HasFactory, softDelete ,InteractsWithMedia;


    protected $fillable=
    [
        'name',
        'delete_at',
        'create_at',
        'update_at'
    ];

          public function Car()
          {
                return $this->hasMany(Car::class);
          }


}
