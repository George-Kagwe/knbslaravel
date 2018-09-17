<?php

namespace App\Models\Education;

use Illuminate\Database\Eloquent\Model;

class education_csa_secondaryschoolenrollmentbyclasssexsubcounty_model extends Model
{
     protected $primaryKey = 'enrollment_id';
    protected $table ='education_csa_secondaryschoolenrollmentbyclasssexsubcounty';
    protected $fillable =[  'county_name',
                          'subcounty_name',
                           
                        'form_1',
                        'form_2',
                        'form_3',
                        'form_4',
                        'gender',
                        'year'
                         ];
}
