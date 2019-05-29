<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'share_name',
        'share_price',
        'share_qty'
    ];

    public function room()
    {
        return $this->belongsTo(Rooms::class);
    }
}
