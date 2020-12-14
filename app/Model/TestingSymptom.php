<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TestingSymptom extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'slug', 'details', 'priority', 'risk_level', 'show', 'status',
    ];

    
}
