<?php

namespace App\Models\Housing;

use Illuminate\Database\Eloquent\Model;

class housing_conditions_kihibs_main_source_of_drinking_water_model extends Model
{
   protected $primaryKey = 'source_id';
    protected $table ='housing_conditions_kihibs_main_source_of_drinking_water';
    protected $fillable =[       'county_id',
                          'piped_dwelling',
                          'piped_yard',
                          'piped_tap',
                          'tubewell',
                          'protected_well',
                          'protected_spring',
                         'rain_water',
                         'bottled_water',
                          'unprotected_well',
                           'unprotected_spring',
                            'vendor_truck',
                             'vendor_drum',
                              'vendor_bicycles',
                               'surface_water',
                          'other',
                          'not_stated',
                          'households',
                    
                       
                         ];
}
