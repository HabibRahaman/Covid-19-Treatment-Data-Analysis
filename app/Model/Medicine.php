<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'group_id', 'name', 'slug', 'details', 'group', 'risk_level', 'show', 'status',
    ];

    public function group()
    {
        return $this->belongsTo('App\Model\Medicine','group_id')->where('group_id',0);
    }

    public function medicine()
    {
        return $this->hasMany('App\Model\Medicine','group_id');
    }


    public function diseases()
    {
        return $this->belongsToMany('App\Model\Disease', 'disease_medicine', 'medicine_id', 'disease_id');
    }

    public function symptoms()
    {
        return $this->belongsToMany('App\Model\Symptom', 'symptom_medicine', 'medicine_id', 'symptom_id');
    }

    public function patients()
    {
        return $this->belongsToMany('App\Model\Patient', 'patient_medicine', 'medicine_id', 'patient_id');
    }
}
