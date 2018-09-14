<?php

namespace App\Models\Health;

use Illuminate\Database\Eloquent\Model;

class HealthHIVAIDSAwarenessAndTesting_Model extends Model
{
    //
         protected $primaryKey = 'awareness_id';
    protected $table ='health_hiv_aids_awareness_and_testing';
    protected $fillable =[ 'county_id',
    	'male',
                          'female',
                          'hiv_awareness'                          
                         
                         ];
}
