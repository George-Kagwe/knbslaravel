<?php

namespace App\Models\Health;

use Illuminate\Database\Eloquent\Model;

class HealthRegisteredMedicalLaboratoriesByCounties_Model extends Model
{
    //
          protected $primaryKey = 'reg_med_lab_id';
    protected $table ='health_registered_medical_laboratories_by_counties';
    protected $fillable =[ 'county_id',
    	'class_a',
                          'class_b',
                          'class_c',
                          'class_d' ,
                           'class_e', 
                            'class_f' ,
                             'unknown'                          
                         ];
}
