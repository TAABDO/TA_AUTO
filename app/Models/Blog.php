<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model implements HasMedia
{
    use HasFactory , InteractsWithMedia;

    protected $fillable=
    [
        'title',
        'description',
        'blogStatus',
        'user_id',
        'create_at',
        'update_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
