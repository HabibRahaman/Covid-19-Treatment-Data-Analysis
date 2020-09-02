<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class HealthCare extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'slug', 'details', 'type', 'priority', 'status',
    ];
}
