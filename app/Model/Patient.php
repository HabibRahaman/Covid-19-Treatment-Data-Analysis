<?php

namespace App\Model;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Patient extends Authenticatable
{
	use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'reg_id', 'name', 'email', 'gender', 'dob', 'age', 'designation', 'phone', 'city', 'country', 'medical_test', 'ventilation', 'icu', 'health_condition', 'entry_type', 'status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function symptoms()
    {
        return $this->belongsToMany('App\Model\Symptom', 'patient_symptom', 'patient_id', 'symptom_id');
    }

    public function medicines()
    {
        return $this->belongsToMany('App\Model\Medicine', 'patient_medicine', 'patient_id', 'medicine_id');
    }

    public function conditions()
    {
        return $this->belongsToMany('App\Model\MedicalCondition', 'patient_medical_condition', 'patient_id', 'medical_condition_id');
    }

    public function health_cares()
    {
        return $this->belongsToMany('App\Model\HealthCare', 'patient_health_care', 'patient_id', 'health_care_id');
    }

    public function prescription()
    {
        return $this->hasOne('App\Model\Prescription', 'patient_id', 'id');
    }
}