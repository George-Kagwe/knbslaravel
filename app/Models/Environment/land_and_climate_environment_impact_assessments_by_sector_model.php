<?php

namespace App\Models\Environment;

use Illuminate\Database\Eloquent\Model;

class land_and_climate_environment_impact_assessments_by_sector_model extends Model
{
    //
    //
    protected $primaryKey = 'sector_id';
    protected $table ='land_and_climate_environment_impact_assessments_by_sector';
    protected $fillable =['sector',
                          'environmental_impact',
                          
                           'year'
                         ];
}
