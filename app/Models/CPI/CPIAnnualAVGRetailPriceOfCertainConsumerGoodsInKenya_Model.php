<?php

namespace App\Models\CPI;

use Illuminate\Database\Eloquent\Model;

class CPIAnnualAVGRetailPriceOfCertainConsumerGoodsInKenya_Model extends Model
{
    //
     protected $primaryKey = 'avg_retail_price_id';
    protected $table ='cpi_annual_avg_retail_prices_of_certain_consumer_goods_in_kenya';
    protected $fillable =['item',
                          'unit',
                          'ksh_per_unit',                          
                          'year'
                         ];
}
