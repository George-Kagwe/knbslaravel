<?php

namespace App\Models\Education;

use Illuminate\Database\Eloquent\Model;

class education_csa_studentenrolmentinyouthpolytechnics_model extends Model
{
   

 protected $primaryKey = 'youth_poly_id';
    protected $table ='education_csa_studentenrolmentinyouthpolytechnics';
    protected $fillable =[ 'county_name',
                          'subcounty_name',
                          'institution_name',
                          'category',
                           'male',
                           'female',
                           'year',

                         ];




}
