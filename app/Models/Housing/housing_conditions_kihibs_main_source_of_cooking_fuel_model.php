<?php

namespace App\Models\Housing;

use Illuminate\Database\Eloquent\Model;

class housing_conditions_kihibs_main_source_of_cooking_fuel_model extends Model
{
    protected $primaryKey = 'source_id';
    protected $table ='housing_conditions_kihibs_main_source_of_cooking_fuel';
    protected $fillable =[   'county_id',
                          'firewood',
                          'electricity',
                          'lpg',
                          'biogas',
                          'kerosene',
                          'charcoal',
                          'shrubs',
                      
                          'animal_dung',
                          'crop_residue',
                          'other',
                          'households'
                         ];
}
