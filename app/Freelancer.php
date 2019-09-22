<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Freelancer extends Model
{

    protected $fillable = [
        'freelance_id',
        'name',
        'price',
        'email',
        'phone'
    ];

    protected $visible = [
        'freelance_id',
        'name',
        'price',
        'email',
        'phone'
    ];
}
