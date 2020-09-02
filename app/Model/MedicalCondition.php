<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class MedicalCondition extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'slug', 'details', 'instructions', 'risk_level', 'show', 'status',
    ];

    
    public function diseases()
    {
        return $this->belongsToMany('App\Model\Disease', 'disease_medical_condition', 'medical_condition_id', 'disease_id');
    }
}
