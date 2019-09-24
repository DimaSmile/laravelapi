<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class User
 * @package App\Models
 * @version September 23, 2019, 8:26 pm UTC
 *
 * @property string name
 * @property string email
 * @property string password
 */
class User extends Model
{

    public $table = 'users';
    


    public $fillable = [
        'name',
        'email',
        'password'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'email' => 'string',
        'password' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'password' => 'required|min:5'
    ];

    
}
