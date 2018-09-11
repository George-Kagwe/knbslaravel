<?php

namespace App\Models\Health;

use Illuminate\Database\Eloquent\Model;

class HealthEarlyChildhoodMortalityRatesBySex_Model extends Model
{
    //
          protected $primaryKey = 'rate_id';
    protected $table ='health_early_childhood_mortality_rates_by_sex';
    protected $fillable =['mortality_rate',
                          'status',   
                           'gender',                       
                          'year'
                         ];
}
