<?php

namespace App\Models\Labour;

use Illuminate\Database\Eloquent\Model;

class LabourWageEmploymentByIndustryInPublicSector_Model extends Model
{
    //
       protected $primaryKey = 'wage_employment_id';
    protected $table ='labour_wage_employment_by_industry_in_public_sector';
    protected $fillable =['public_sector',
                          'wage_employment',
                           
                           'year'
                         
                         ];
}
