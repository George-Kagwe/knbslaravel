<?php

namespace App\Models\Housing;

use Illuminate\Database\Eloquent\Model;

class housing_conditions_kihibs_hholds_by_type_of_housing_unit_model extends Model
{
    

  protected $primaryKey = 'unit_id';
    protected $table ='housing_conditions_kihibs_hholds_by_type_of_housing_unit';
    protected $fillable =[  'county_id',
                          'bungalow',
                          'flat',
                          'maisonnette',
                          'swahili',
                          'shanty',
                          'manyatta',
                          'landhi',
                          'other',
                          'not_stated',
                          'households',
                    
                  
                       
                         ];


    }
