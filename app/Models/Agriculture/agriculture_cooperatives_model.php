<?php

namespace App\Models\Agriculture;

use Illuminate\Database\Eloquent\Model;

class agriculture_cooperatives_model extends Model
{
    //




 
    protected $primaryKey = 'cooperatives_id';
    protected $table ='agriculture_cooperatives';
    protected $fillable =[    'coffee',
      'cotton',
      'pyrethrum',
      'sugar',
       'dairy',
      'multi_purpose',
      'farm_purchase',
      'fisheries',
       'other_agricultural',
      'saccos',
      'consumer',
      'housing',
                              
    'craftsmen',
       'transport',
      'other_non_agricultur',
      'unions',
      'year'                                      
                        
                         ];





}
