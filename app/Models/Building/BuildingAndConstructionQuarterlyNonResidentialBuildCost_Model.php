<?php

namespace App\Models\Building;

use Illuminate\Database\Eloquent\Model;

class BuildingAndConstructionQuarterlyNonResidentialBuildCost_Model extends Model
{
    //
       protected $primaryKey = 'cost_index_id';
    protected $table ='building_and_construction_quarterly_non_residential_build_cost';
    protected $fillable =['category',
                          'march',
                          'june', 
                           'sept', 
                            'december',                          
                          'year'
                         ];
}
