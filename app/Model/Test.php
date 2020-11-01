<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'session_id', 'name', 'email', 'gender', 'dob', 'age', 'designation', 'phone', 'city', 'country'
    ];
}
