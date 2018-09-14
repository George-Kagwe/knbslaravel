<?php

namespace App\Models\Housing;

use Illuminate\Database\Eloquent\Model;

class housing_conditions_kihibs_hholds_by_habitable_rooms_model extends Model
{
  protected $primaryKey = 'room_id';
    protected $table ='housing_conditions_kihibs_hholds_by_habitable_rooms';
    protected $fillable =[ 'county_id',
                          'one',
                          'two',
                          'three',
                          'four',
                          'five',
                          'six_plus',
                          'not_stated',
                          'mean_rooms',
                          'households',
                          'persons_per_room'
                  
                       
                         ];





}
