<?php

namespace App\Models\Health;

use Illuminate\Database\Eloquent\Model;

class HealthNutritionalStatusOfWomen_Model extends Model
{
    //
             protected $primaryKey = 'nutrition_adult_id';
    protected $table ='health_nutritional_status_of_women';
    protected $fillable =[ 'county_id',
    	'undernutrition',
                          'normal',
                          'overweight',
                          'obese'                          
                         ];
}
