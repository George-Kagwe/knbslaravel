<?php

namespace App\Models\Environment;

use Illuminate\Database\Eloquent\Model;

class land_and_climate_rainfall_model extends Model
{
     protected $primaryKey = 'climate_rainfall_id';
    protected $table ='land_and_climate_rainfall';
    protected $fillable =['county_id',
                          'rainfall_id',
                          'rainfall_in_mm',
                          'year'
                         ];
}
