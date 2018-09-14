<?php

namespace App\Models\Health;

use Illuminate\Database\Eloquent\Model;

class HealthFertilityRateByAgeAndResidence_Model extends Model
{
    //
        protected $primaryKey = 'fertility_id';
    protected $table ='health_fertility_rate_by_age_and_residence';
    protected $fillable =['fertility_rate',
                          'age_group',   
                           'residence',                       
                          'year'
                         ];
}
