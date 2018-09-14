<?php

namespace App\Models\Labour;

use Illuminate\Database\Eloquent\Model;

class LabourAverageWageEarningsPerEmployeePrivateSector_Model extends Model
{
    //
        protected $primaryKey = 'wage_earnings_id';
    protected $table ='labour_average_wage_earnings_per_employee_private_sector';
    protected $fillable =['private_sector',
                          'wage_earnings',
                           'year'
                         
                         ];
}
