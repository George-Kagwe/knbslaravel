<?php

namespace App\Models\Agriculture;

use Illuminate\Database\Eloquent\Model;

class AgricultureTotalShareCapital_Model extends Model
{
    //
     protected $primaryKey = 'total_share_capital_id';
    protected $table ='agriculture_totalsharecapital';
    protected $fillable =[ 'coffee',
      'cotton',
      'pyrethrum',
       'sugar',
        
      'dairy',
       'multi_purpose',
      'farm_purchase',
      'fisheries',
       'other_agricultural',
        
      'total_agriculture',
       'saccos',
      'consumer',
      'housing',
       'craftsmen',
        
      'transport',
       'other_non_agricultural',
      'total_non_agricultural',
      'unions',
       
        
      'year'
                         ];
}
