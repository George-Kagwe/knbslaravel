<?php

namespace App\Models\Education;

use Illuminate\Database\Eloquent\Model;

class education_edstat_primary_enrollment_enrollment_rates_county_model extends Model
{
 


 protected $primaryKey = 'primary_enrollment_id';
    protected $table ='education_edstat_primary_enrollment_enrollment_rates_county';
    protected $fillable =['county_name',
                           'primary_enrollment',
                           'gross_enrollment_rate',
                           'net_enrollment_rate',
                           'gender',
                           'year',


                         ];








}
