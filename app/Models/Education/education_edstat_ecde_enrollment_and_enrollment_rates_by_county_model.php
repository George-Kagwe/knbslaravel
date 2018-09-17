<?php

namespace App\Models\Education;

use Illuminate\Database\Eloquent\Model;

class education_edstat_ecde_enrollment_and_enrollment_rates_by_county_model extends Model
{



 protected $primaryKey = 'ecde_enrollment_id';
    protected $table ='education_edstat_ecde_enrollment_and_enrollment_rates_by_county';
    protected $fillable =[  'county_name',
                  
                           'ecde_enrollment',
                           'gross_enrollment_rate',
                           'net_enrollment_rate',
                           'gender',
                           'year',



                         ];




}
