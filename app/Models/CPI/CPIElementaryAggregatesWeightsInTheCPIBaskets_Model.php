<?php

namespace App\Models\CPI;

use Illuminate\Database\Eloquent\Model;

class CPIElementaryAggregatesWeightsInTheCPIBaskets_Model extends Model
{
    //
        protected $primaryKey = 'aggregate_weights_id';
    protected $table ='cpi_elementary_aggregates_weights_in_the_cpi_baskets';
    protected $fillable =[    'coicop_code',
      'description',
      'nairobi_lower',
      'nairobi_middle',
      'nairobi_upper',
      'rest_of_urban_areas',
      'kenya',
      
                         ];
}
