<?php

namespace App\Models\Building;

use Illuminate\Database\Eloquent\Model;

class BuildingAndConstructionQuarterlyOveralConstructionCost_Model extends Model
{
    //
        protected $primaryKey = 'category_id';
    protected $table ='building_and_construction_quarterly_overal_construction_cost';
    protected $fillable =['category',
                          'march',
                          'june', 
                           'sept', 
                            'december',                          
                          'year'
                         ];
}
