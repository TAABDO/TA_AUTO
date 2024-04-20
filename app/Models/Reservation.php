<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;


    protected $fillable = [
        'identification_card',
        'licence',
        'licenceDate',
        'pickupDate',
        'dropofDate',
        'pickupLocation',
        'dropofLocation',
        'user_id',
        'announcement_id',
        'create_at',
        'update_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function announcement()
    {
        return $this->belongsTo(Announcement::class);
    }
}
