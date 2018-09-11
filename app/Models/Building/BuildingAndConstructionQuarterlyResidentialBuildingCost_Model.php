<?php

namespace App\Models\Building;

use Illuminate\Database\Eloquent\Model;

class BuildingAndConstructionQuarterlyResidentialBuildingCost_Model extends Model
{
    //
        protected $primaryKey = 'building_construction_id';
    protected $table ='building_and_construction_quarterly_residential_bulding_cost';
    protected $fillable =['category',
                          'march',
                          'june', 
                           'september', 
                            'december',                          
                          'year'
                         ];
}
