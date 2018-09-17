<?php

namespace App\Models\Education;

use Illuminate\Database\Eloquent\Model;

class education_csa_adulteducationcentresbysubcounty_model extends Model
{
    protected $primaryKey = 'adult_centre_id';
    protected $table ='education_csa_adulteducationcentresbysubcounty';
    protected $fillable =['county_id',
                          'sub_county_id',
                          'centres',                          
                          'year'
                         ];
}
