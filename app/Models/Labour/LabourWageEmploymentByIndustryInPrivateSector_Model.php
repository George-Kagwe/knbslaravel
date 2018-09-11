<?php

namespace App\Models\Labour;

use Illuminate\Database\Eloquent\Model;

class LabourWageEmploymentByIndustryInPrivateSector_Model extends Model
{
    //
       protected $primaryKey = 'wage_employment_id';
    protected $table ='labour_wage_employment_by_industry_in_private_sector';
    protected $fillable =['private_sector',
                          'wage_employment',
                           
                           'year'
                         
                         ];
}
