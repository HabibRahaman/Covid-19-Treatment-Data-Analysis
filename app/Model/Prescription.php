<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'patient_id', 'details',
    ];

    public function patient()
    {
        return $this->belongsTo('App\Model\Patient', 'patient_id');
    }
}
