<?php

namespace App\Models\Education;

use Illuminate\Database\Eloquent\Model;

class education_edstat_secondary_enrollment_enrollment_rates_county_model extends Model
{
protected $primaryKey = 'secondary_enrollment_id';
    protected $table ='education_edstat_secondary_enrollment_enrollment_rates_county';
    protected $fillable =['county_name',
                           'secondary_enrollment',
                           'gross_enrollment_rate',
                           'net_enrollment_rate',
                           'gender',
                           'year',


                         ];

}
