<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $fillable = [
        'title',
        'first_name',
        'last_name',
        'id_number',
        'telephone',
        'mobile'
    ];
}
