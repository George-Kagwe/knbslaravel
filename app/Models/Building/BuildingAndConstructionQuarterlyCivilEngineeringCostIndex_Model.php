<?php

namespace App\Models\Building;

use Illuminate\Database\Eloquent\Model;

class BuildingAndConstructionQuarterlyCivilEngineeringCostIndex_Model extends Model
{
    //
        protected $primaryKey = 'cost_index_id';
    protected $table ='building_and_construction_quarterly_civil_engineering_cost_index';
    protected $fillable =['category',
                          'march',
                          'june', 
                           'sept', 
                            'december',                          
                          'year'
                         ];
}
