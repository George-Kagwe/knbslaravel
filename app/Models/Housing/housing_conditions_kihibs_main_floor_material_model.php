<?php

namespace App\Models\Housing;

use Illuminate\Database\Eloquent\Model;

class housing_conditions_kihibs_main_floor_material_model extends Model
{
 protected $primaryKey = 'material_id';
    protected $table ='housing_conditions_kihibs_main_floor_material';
    protected $fillable =[   'county_id',
                          'tiles',
                          'cement',
                          'wood',
                          'cow_dung',
                          'sand',
                          'carpet',
                         'other',
                      
                          'not_stated',
                          'households',
                       
                         ];


}
