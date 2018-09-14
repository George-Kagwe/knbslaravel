<?php

namespace App\Models\Health;

use Illuminate\Database\Eloquent\Model;

class HealthPrevalenceOfOverweightAndObesity_Model extends Model
{
    //
       protected $primaryKey = 'prevalence_id';
    protected $table ='health_prevalence_of_overweight_and_obesity';
    protected $fillable =['age_group',
                          'women',   
                           'men',                        
                          'total',
                          'category' 
                         ];
}
