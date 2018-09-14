<?php

namespace App\Models\Environment;

use Illuminate\Database\Eloquent\Model;

class land_and_climate_temperature_model extends Model
{
    
protected $primaryKey = 'climate_temperature_id';
    protected $table ='land_and_climate_temperature';
    protected $fillable =['county_id',
                          'temperature_id',
                          'temp_celsius_degrees',
                           'year'
                         ];




}
