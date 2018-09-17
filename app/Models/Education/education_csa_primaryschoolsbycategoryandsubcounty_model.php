<?php

namespace App\Models\Education;

use Illuminate\Database\Eloquent\Model;

class education_csa_primaryschoolsbycategoryandsubcounty_model extends Model
{
    protected $primaryKey = 'primary_schools_id';
    protected $table ='education_csa_primaryschoolsbycategoryandsubcounty';
    protected $fillable =['county_id',
                          'sub_county_id',
                          'no_of_schools',
                          'category',
                          'year'
                         ];
}
