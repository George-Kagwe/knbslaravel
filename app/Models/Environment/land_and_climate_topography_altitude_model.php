<?php

namespace App\Models\Environment;

use Illuminate\Database\Eloquent\Model;

class land_and_climate_topography_altitude_model extends Model
{
  

protected $primaryKey = 'altitude_topography_id';
    protected $table ='land_and_climate_topography_altitude';
    protected $fillable =['county_id',
                          'geography_type',
                          'altitude_in_metres',
                           'year'
                         ];


  
}
