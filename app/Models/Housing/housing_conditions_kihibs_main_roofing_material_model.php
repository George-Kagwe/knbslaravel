<?php

namespace App\Models\Housing;

use Illuminate\Database\Eloquent\Model;

class housing_conditions_kihibs_main_roofing_material_model extends Model
{
    protected $primaryKey = 'material_id';
    protected $table ='housing_conditions_kihibs_main_roofing_material';
    protected $fillable =[         'county_id',
                          'grass',
                          'mud',
                          'iron_sheets',
                          'tin_cans',
                          'sheet',
                          'concrete',
                          'tiles',
                      
                          'not_stated',
                          'households',
                       
                         ];
}
