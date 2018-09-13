<?php

namespace App\Models\Health;

use Illuminate\Database\Eloquent\Model;

class HealthRegisteredMedicalPersonnel_Model extends Model
{
    //
      protected $primaryKey = 'registered_medical_id';
    protected $table ='health_registeredmedicalpersonnel';
    protected $fillable =['county_id',
                          'medical_personnel_id',
                          'no_of_personnel',
                          'gender',
                          'year'
                         ];
}
