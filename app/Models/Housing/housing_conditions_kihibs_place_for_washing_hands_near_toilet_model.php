<?php

namespace App\Models\Housing;

use Illuminate\Database\Eloquent\Model;

class housing_conditions_kihibs_place_for_washing_hands_near_toilet_model extends Model
{
    

  protected $primaryKey = 'place_id';
    protected $table ='housing_conditions_kihibs_place_for_washing_hands_near_toilet';
    protected $fillable =[       
                          'county_id',
                          'place',
                          'no_place',
                          'not_stated',
                          'households',
                    
                       
                         ];



    }
