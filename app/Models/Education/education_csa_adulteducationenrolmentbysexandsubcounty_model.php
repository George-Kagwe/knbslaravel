<?php

namespace App\Models\Education;

use Illuminate\Database\Eloquent\Model;

class education_csa_adulteducationenrolmentbysexandsubcounty_model extends Model
{
     protected $primaryKey = 'adult_enrolment_id';
    protected $table ='education_csa_adulteducationenrolmentbysexandsubcounty';
    protected $fillable =['county_id',
                          'subcounty_id',
                          'number',
                         'gender',
                          'year',
                         ];
}
