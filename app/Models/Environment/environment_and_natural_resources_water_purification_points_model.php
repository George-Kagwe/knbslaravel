<?php

namespace App\Models\Environment;

use Illuminate\Database\Eloquent\Model;

class environment_and_natural_resources_water_purification_points_model extends Model
{
    //
    protected $primaryKey = 'water_id';
    protected $table ='environment_and_natural_resources_water_purification_points';
    protected $fillable =['water_purification_points',
                          'boreholes_total',
                          'public',
                           'year'
                         ];
}
