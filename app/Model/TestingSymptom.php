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


    public function diseases()
    {
        return $this->belongsToMany('App\Model\TestingDisease', 'testing_disease_symptom', 'symptom_id', 'disease_id')->withPivot('priority');
    }
}
