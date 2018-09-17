<?php

namespace App\Models\Housing;

use Illuminate\Database\Eloquent\Model;

class housing_conditions_kihibs_main_toilet_facility_model extends Model
{
 

  protected $primaryKey = 'facility_id';
    protected $table ='housing_conditions_kihibs_main_toilet_facility';
    protected $fillable =[       'county_id',
                          'piped_sewer',
                          'septic_tank',
                          'latrine',
                          'vip',
                          'latrine_slab',
                          'composting_toilet',
                         'somewhere_else',
                          'unknown_place',
                          'without_slab',
                           'bucket_toilet',
                           'hanging_toilet',
                           
                          'bush',
                          'other',
                          'not_stated',
                          'households',
                    
                       
                         ];



}
