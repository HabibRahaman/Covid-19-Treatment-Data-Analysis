<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TestingDisease extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'slug', 'details', 'type', 'risk_level', 'status',
    ];

    
}
