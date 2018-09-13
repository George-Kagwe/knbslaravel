<?php

namespace App\Models\Health;

use Illuminate\Database\Eloquent\Model;

class HealthImmunizationRate_Model extends Model
{
    //
     protected $primaryKey = 'immunization_id';
    protected $table ='health_immunization_rate';
    protected $fillable =[ 'county_id',
                          'rate',
                          'year' 


                         ];
}
