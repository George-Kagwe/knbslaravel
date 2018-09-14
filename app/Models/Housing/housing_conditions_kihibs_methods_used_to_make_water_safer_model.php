<?php

namespace App\Models\Housing;

use Illuminate\Database\Eloquent\Model;

class housing_conditions_kihibs_methods_used_to_make_water_safer_model extends Model
{
    
  protected $primaryKey = 'method_id';
    protected $table ='housing_conditions_kihibs_methods_used_to_make_water_safer';
    protected $fillable =[       
                          'county_id',
                          'boil',
                          'add_bleach',
                          'water_filter',
                          'solar',
                          'sieve_cloth',
                          'stand_settle',
                          'other',
                          'households',
                          'nothing',
                    
                       
                         ];

}
