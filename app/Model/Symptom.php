<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Symptom extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'slug', 'details', 'priority', 'risk_level', 'show', 'status',
    ];


    public function diseases()
    {
        return $this->belongsToMany('App\Model\Disease', 'disease_symptom', 'symptom_id', 'disease_id');
    }

    public function medicines()
    {
        return $this->belongsToMany('App\Model\Medicine', 'symptom_medicine', 'symptom_id', 'medicine_id');
    }
}
