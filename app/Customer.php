<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'customer_id',
        'name',
        'email',
        'phone',
    ];

    protected $visible = [
        'customer_id',
        'name',
        'email',
        'phone',
    ];
}
