<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TestReport extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'gender', 'dob', 'age', 'designation', 'phone', 'city', 'country'
    ];


    public function symptoms()
    {
        return $this->belongsToMany('App\Model\TestingSymptom', 'symptom_report', 'report_id', 'symptom_id');
    }

    public function diseases()
    {
        return $this->belongsToMany('App\Model\TestingDisease', 'disease_report', 'report_id', 'disease_id')->withPivot('probability');
    }
}
