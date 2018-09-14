<?php

namespace App\Models\Health;

use Illuminate\Database\Eloquent\Model;

class HealthInsuranceCoverageByCountiesAndTypes_Model extends Model
{
    //
           protected $primaryKey = 'insurance_coverage_id';
    protected $table ='health_insurance_coverage_by_counties_and_types';
    protected $fillable =[ 'county_id',
    	'insured',
                          'nhif',
                          'cbhi',
                          'private', 
                              'others'                         
                         ];
}
