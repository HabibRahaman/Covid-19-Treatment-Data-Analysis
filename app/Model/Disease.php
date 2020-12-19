<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Disease extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'slug', 'details', 'type', 'risk_level', 'status',
    ];


    public function symptoms()
    {
        return $this->belongsToMany('App\Model\Symptom', 'disease_symptom', 'disease_id', 'symptom_id');
    }

    public function medicines()
    {
        return $this->belongsToMany('App\Model\Medicine', 'disease_medicine', 'disease_id', 'medicine_id');
    }

    public function conditions()
    {
        return $this->belongsToMany('App\Model\MedicalCondition', 'disease_medical_condition', 'disease_id', 'medical_condition_id');
    }

    public function health_cares()
    {
        return $this->belongsToMany('App\Model\HealthCare', 'disease_health_care', 'disease_id', 'health_care_id');
    }
}
