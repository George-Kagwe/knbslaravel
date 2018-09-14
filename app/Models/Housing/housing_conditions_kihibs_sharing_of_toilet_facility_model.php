<?php

namespace App\Models\Housing;

use Illuminate\Database\Eloquent\Model;

class housing_conditions_kihibs_sharing_of_toilet_facility_model extends Model
{
    protected $primaryKey = 'proportion_id';
    protected $table ='housing_conditions_kihibs_sharing_of_toilet_facility';
    protected $fillable =[       
                          'county_id',
                          'shared_toilet',
                          'not_shared',
                          'not_stated',
                          'households',
                    
                       
                         ];

}
