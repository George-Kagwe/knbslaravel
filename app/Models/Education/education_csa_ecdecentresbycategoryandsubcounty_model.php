<?php

namespace App\Models\Education;

use Illuminate\Database\Eloquent\Model;

class education_csa_ecdecentresbycategoryandsubcounty_model extends Model
{
   protected $primaryKey = 'ecde_centre_id';
    protected $table ='education_csa_ecdecentresbycategoryandsubcounty';
    protected $fillable =['county_id',
                          'sub_county_id',
                          'no_of_centres',
                          'category',
                          'year'
                         ];
}
