<?php

namespace App\Models\Housing;

use Illuminate\Database\Eloquent\Model;

class housing_conditions_kihibs_time_taken_to_fetch_drinking_water_model extends Model
{
       protected $primaryKey = 'time_id';
    protected $table ='housing_conditions_kihibs_time_taken_to_fetch_drinking_water';
    protected $fillable =[       
                          'county_id',
                          'zero',
                          'less_thirty_min',
                          'over_thirty_min',
                          'not_stated',
                          'households',
                    
                       
                         ];

}
