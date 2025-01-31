<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
//    protected $guarded = ['id'];
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'street',
        'city',
        'country',
        'state',
        'zip',
    ];
}
