<?php

namespace App\Models\Agriculture;

use Illuminate\Database\Eloquent\Model;

class AgricultureProductionAreaAverageYieldCoffeeTypeOfGrower_Model extends Model
{
    //
            protected $primaryKey = 'category_id';
    protected $table ='agriculture_production_area_average_yield_coffee_type_of_grower';
    protected $fillable =['category',
                          'cooperatives',
                          'estates', 
                           'unit', 
                                                      
                          'year'
                         ];
}
