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


    public function diseases()
    {
        return $this->belongsToMany('App\Model\Disease', 'disease_health_care', 'health_care_id', 'disease_id');
    }

    public function patients()
    {
        return $this->belongsToMany('App\Model\Patient', 'patient_health_care', 'health_care_id', 'patient_id');
    }
}
