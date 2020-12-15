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


    public function symptoms()
    {
        return $this->belongsToMany('App\Model\TestingSymptom', 'testing_disease_symptom', 'disease_id', 'symptom_id')->withPivot('priority');
    }
}
