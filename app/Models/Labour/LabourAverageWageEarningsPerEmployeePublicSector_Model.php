<?php

namespace App\Models\Labour;

use Illuminate\Database\Eloquent\Model;

class LabourAverageWageEarningsPerEmployeePublicSector_Model extends Model
{
    //
    protected $primaryKey = 'wage_earnings_id';
    protected $table ='labour_average_wage_earnings_per_employee_public_sector';
    protected $fillable =['public_sector',
                          'wage_earnings',
                           'year'
                         
                         ];
}
