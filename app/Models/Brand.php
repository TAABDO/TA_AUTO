<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Brand extends Model implements HasMedia
{
    use HasFactory, SoftDeletes ,InteractsWithMedia;


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
