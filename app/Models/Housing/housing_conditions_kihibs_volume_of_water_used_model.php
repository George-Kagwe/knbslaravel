<?php

namespace App\Models\Housing;

use Illuminate\Database\Eloquent\Model;

class housing_conditions_kihibs_volume_of_water_used_model extends Model
{


      protected $primaryKey = 'volume_id';
    protected $table ='housing_conditions_kihibs_volume_of_water_used';
    protected $fillable =[       
                            'county_id',
                         'lit_0_1000',
                          'lit_1001_2000',
                         'lit_2001_3000',
                          'over_3000_lit',
                          'not_stated',
                          'households',
                    
                    
                       
                         ];


}
