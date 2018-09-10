<?php

namespace App\Models\Finance;

use Illuminate\Database\Eloquent\Model;

class finance_cdf_allocation_by_constituency_model extends Model
{
   protected $primaryKey = 'budget_allocation_ID';
    protected $table ='finance_excise_revenue_commodity';
    protected $fillable =[ 'county_id',
                          'recurrent',
                          'development' ,
                          'total_allocation',
                   
                          'year' 


                         ];

}
