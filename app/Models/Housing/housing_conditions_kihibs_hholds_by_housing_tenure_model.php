<?php

namespace App\Models\Housing;

use Illuminate\Database\Eloquent\Model;

class housing_conditions_kihibs_hholds_by_housing_tenure_model extends Model
{
    
  protected $primaryKey = 'tenure_id';
    protected $table ='housing_conditions_kihibs_hholds_by_housing_tenure';
    protected $fillable =[ 'county_id',
                          'owner_occupier',
                          'pays_rent',
                          'no_rent_consent',
                          'no_rent_squatting',
                          'not_stated',
                           'households'
                       
                         ];





}
