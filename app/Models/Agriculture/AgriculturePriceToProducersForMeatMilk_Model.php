<?php

namespace App\Models\Agriculture;

use Illuminate\Database\Eloquent\Model;

class AgriculturePriceToProducersForMeatMilk_Model extends Model
{
    //
         protected $primaryKey = 'price_to_producers_for_meat_milk_id';
    protected $table ='agriculture_pricetoproducersformeatmilk';
    protected $fillable =['beef_third_grade_per_kg',
                          'pig_meat_per_kg',
                          'whole_milk_per_litre', 
                           
                                                      
                          'year'
                         ];
}
