<?php

namespace App\Models\Housing;

use Illuminate\Database\Eloquent\Model;

class housing_conditions_kihibs_main_wall_material_model extends Model
{
 

  protected $primaryKey = 'material_id';
    protected $table ='housing_conditions_kihibs_main_wall_material';
    protected $fillable =[       
        'county_id',
                          'lime_stone',
                          'bricks',
                          'cement_blocks',
                          'cement_finish',
                          'wood',
                          'adobe',
                         'iron_sheets',
                          'bamboo',
                          'stone',
                           'cane',
                            'plywood',
                           
                      
                          'not_stated',
                          'households',
                    
                       
                         ];










    //
}
