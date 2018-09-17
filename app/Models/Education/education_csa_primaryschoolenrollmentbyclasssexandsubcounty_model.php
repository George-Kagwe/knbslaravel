<?php

namespace App\Models\Education;

use Illuminate\Database\Eloquent\Model;

class education_csa_primaryschoolenrollmentbyclasssexandsubcounty_model extends Model
{
    protected $primaryKey = 'primary_enrollment_id';
    protected $table ='education_csa_primaryschoolenrollmentbyclasssexandsubcounty';
    protected $fillable =[  'county_name',
                          'subcounty_name',
                        'class_1',
                        'class_2',
                        'class_3',
                        'class_4',
                        'class_5',
                        'class_6',
                        'class_7',
                        'class_8',
                        'gender',
                        'year'
                         ];
}
