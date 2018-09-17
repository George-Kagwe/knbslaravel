<?php

namespace App\Models\Housing;

use Illuminate\Database\Eloquent\Model;

class housing_conditions_kihibs_waste_disposal_method_model extends Model
{
      protected $primaryKey = 'method_id';
    protected $table ='housing_conditions_kihibs_waste_disposal_method';
    protected $fillable =[       
                            'county_id',
                          'county_gov',
                          'community',
                          'private_co',
                          'dumped_compound',
                          'dumped_street',
                          'dumped_latrine',
                         'burnt',
                          'buried',
                       
                           'other',
                          'not_stated',
                          'households',
                    
                    
                       
                         ];
}
