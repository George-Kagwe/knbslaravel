<?php

namespace App\Models\Agriculture;

use Illuminate\Database\Eloquent\Model;

class AgricultureProductionAreaAverageYieldTeaTypeGrower_Model extends Model
{
    //
         protected $primaryKey = 'category_id';
    protected $table ='agriculture_production_area_average_yield_tea_type_grower';
    protected $fillable =['category',
                          'smallholders',
                          'estates', 
                           'unit', 
                                                      
                          'year'
                         ];
}
