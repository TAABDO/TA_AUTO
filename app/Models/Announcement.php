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




// <section id="reservation" style="visibility: visible" class="flex flex-wrap md:flex-row justify-center items-center">

    //     @foreach ($reservations as $reservation)
    //         <div class="flex flex-col md:flex-row bg-white shadow-lg rounded-lg m-4 w-full md:max-w-2xl">
    //             <div class="w-full md:w-1/2 bg-cover"
    //                 style="background-image: url('{{ $reservation->announcement->getFirstMediaUrl('images') }}')">
    //             </div>
    //             <div class="w-full md:w-1/2 p-4">
    //                 <h1 class="text-gray-900 font-bold text-2xl mb-2">{{ $reservation->announcement->car->model }}</h1>
    //                 <p class="text-gray-600 text-sm mb-2">Price: ${{ $reservation->announcement->price }}</p>
    //                 <p class="text-gray-600 text-sm mb-2">Availability: {{ $reservation->announcement->status }}</p>
    //                 <p class="text-gray-600 text-sm mb-2">City: {{ $reservation->announcement->city }}</p>
    //                 <p class="text-gray-600 text-sm mb-2">Id Card: {{ $reservation->identification_card }}</p>
    //                 <p class="text-gray-600 text-sm mb-2">Licence: {{ $reservation->licence }}</p>
    //                 <p class="text-gray-600 text-sm mb-2">Licence Year: {{ $reservation->licenceDate }}</p>
    //                 <p class="text-gray-600 text-sm mb-2">Pickup-D: {{ $reservation->pickupDate }}</p>
    //                 <p class="text-gray-600 text-sm mb-2">Dropoff-D: {{ $reservation->dropofDate }}</p>
    //                 <p class="text-gray-600 text-sm mb-2">Pickup-L: {{ $reservation->pickupLocation }}</p>
    //                 <p class="text-gray-600 text-sm mb-2">Dropoff-L: {{ $reservation->dropofLocation }}</p>
    //                 <div class="mt-4">
    //                     <form action="{{ route('ClientProfile.cancelReservation') }}">
    //                         <button
    //                         class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center mr-2">
    //                         Cancel Reservation
    //                     </button>
    //                     </form>
    //                     <form action="">
    //                         <button
    //                         class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded inline-flex items-center">
    //                         Download Reservation
    //                     </button>
    //                     </form>


    //                 </div>
    //             </div>
    //         </div>
    //     @endforeach
    // </section>
