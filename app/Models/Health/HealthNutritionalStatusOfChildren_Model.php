<?php

namespace App\Models\Health;

use Illuminate\Database\Eloquent\Model;

class HealthNutritionalStatusOfChildren_Model extends Model
{
    //
           protected $primaryKey = 'nutrition_child_id';
    protected $table ='health_nutritional_status_of_children';
    protected $fillable =[ 'county_id',
    	'stunted',
                          'wasted',
                          'under_weight'                          
                         
                         ];
}
