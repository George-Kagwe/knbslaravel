<?php

namespace App\Models\Health;

use Illuminate\Database\Eloquent\Model;

class HealthMaternalCare_Model extends Model
{
    //
         protected $primaryKey = 'maternal_care_id';
    protected $table ='health_maternal_care';
    protected $fillable =[ 'county_id',
    	'percent_receiving_antenatal_care_from_a_skilled_provider',
                          'percent_delivered_in_a_health_facility',
                          'percent_delivered_by_a_skilled_provider'                          
                         
                         ];
}
