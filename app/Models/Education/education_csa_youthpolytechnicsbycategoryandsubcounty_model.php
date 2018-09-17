<?php

namespace App\Models\Education;

use Illuminate\Database\Eloquent\Model;

class education_csa_youthpolytechnicsbycategoryandsubcounty_model extends Model
{
  

 protected $primaryKey = 'youth_poly_id';
    protected $table ='education_csa_youthpolytechnicsbycategoryandsubcounty';
    protected $fillable =[ 
                            'county_name',
                           'subcounty_name',
                           'public',
                           'private',
                       
                           'year',



                         ];





}
