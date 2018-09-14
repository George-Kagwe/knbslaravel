<?php

namespace App\Models\Health;

use Illuminate\Database\Eloquent\Model;

class HealthDistributionOfOutPatientVisitsByTypeOfHealthCareProvider_Model extends Model
{
    //
           protected $primaryKey = 'health_facility_id';
    protected $table ='health_distributionofoutpatientvisitsbytypeofhealthcareprovider';
    protected $fillable =[ 'county_id',
    	'public',
                          'private',
                          'faith_based',
                          'others'                          
                         ];
}
