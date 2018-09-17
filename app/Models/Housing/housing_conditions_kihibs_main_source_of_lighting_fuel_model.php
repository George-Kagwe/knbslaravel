<?php

namespace App\Models\Housing;

use Illuminate\Database\Eloquent\Model;

class housing_conditions_kihibs_main_source_of_lighting_fuel_model extends Model
{


  protected $primaryKey = 'source_id';
    protected $table ='housing_conditions_kihibs_main_source_of_lighting_fuel';
    protected $fillable =[      'county_id',
                          'electricity',
                          'generator',
                          'solar_energy',
                          'paraffin_lantern',
                          'paraffin_tin_lamp',
                          'paraffin_pressure_lamp',
                         'fuel_wood',
                                'gas_lamp',
                          'battery_lamp',
                           'candles',
                            'biogas',
                           
                          'other',
                          'not_stated',
                          'households',
                    
                    
                       
                         ];







}
