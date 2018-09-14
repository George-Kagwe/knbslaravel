<?php

namespace App\Models\Health;

use Illuminate\Database\Eloquent\Model;

class HealthFertilityByEducationStatus_Model extends Model
{
    //
     protected $primaryKey = 'fertility_id';
    protected $table ='health_fertility_by_education_status';
    protected $fillable =['fertility',
                          'education_status',                          
                          'year'
                         ];
}
