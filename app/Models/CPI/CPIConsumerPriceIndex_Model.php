<?php

namespace App\Models\CPI;

use Illuminate\Database\Eloquent\Model;

class CPIConsumerPriceIndex_Model extends Model
{
          //
     protected $primaryKey = 'cpi_retail_price_id';
    protected $table ='cpi_consumer_price_index';
    protected $fillable =[    'month',
      'group',
      'food_and_non_alcoholic_beverages',
      'alcoholic_beverages_tobacco_narcotics',
      'clothing_and_footwear',
      'housing_water_electricity_gas_and_other_fuels',
      'furnishings_household_equipment_routine_household_maintenance',
      'health',
      'transport',
      'communication',
      'recreation_and_culture',
      'education',
      'restaurant_and_hotels',
      'miscellaneous_goods_and_services',
      'total',
      'year'
                         ];
}
