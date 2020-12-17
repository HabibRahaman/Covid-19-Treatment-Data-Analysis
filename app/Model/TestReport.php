<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TestReport extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'gender', 'dob', 'age', 'designation', 'phone', 'city', 'country'
    ];
}
