<?php

namespace App\Models\Education;

use Illuminate\Database\Eloquent\Model;

class education_csa_adulteducationproficiencytestresults_model extends Model
{

     protected $primaryKey = 'adult_enrolment_id';
    protected $table ='education_csa_adulteducationproficiencytestresults';
    protected $fillable =['county_id',
                          'sub_county_id',
                          'no_sat',
                          'no_passed',
                           'gender',
                           'year',
                       ];
}
