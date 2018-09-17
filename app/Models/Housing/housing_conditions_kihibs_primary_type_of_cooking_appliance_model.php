<?php

namespace App\Models\Housing;

use Illuminate\Database\Eloquent\Model;

class housing_conditions_kihibs_primary_type_of_cooking_appliance_model extends Model
{
  protected $primaryKey = 'appliance_id';
    protected $table ='housing_conditions_kihibs_primary_type_of_cooking_appliance';
    protected $fillable =[       
                          'county_id',
                          'stone_fire',
                          'imp_stone_fire',
                          'ordinary_jiko',
                          'improved_jiko',
                          'stove',
                          'gas_cooker',
                          'electric_cooker',
                          'elec_gas_cooker',
                          'other',
                          'not_stated',
                          'households',
                      
                    
                       
                         ];
}
