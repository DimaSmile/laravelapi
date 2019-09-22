<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
        'application_id',
        'comment',
        'freelancer_id',
        'order_id',
    ];

    protected $visible = [
        'application_id',
        'comment',
    ];
}
