<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'guest_id',
        'room_id',
        'checkin_dtime',
        'checkout_dtime'
    ];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
