<?php

namespace App\Models\Labour;

use Illuminate\Database\Eloquent\Model;

class LabourWageEmploymentByIndustryAndSex_Model extends Model
{
    //
       protected $primaryKey = 'wage_employment_id';
    protected $table ='labour_wage_employment_by_industry_and_sex';
    protected $fillable =['industry',
                          'wage_employment',
                           'gender',
                           'year'
                         
                         ];
}
