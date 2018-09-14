<?php

namespace App\Models\CPI;

use Illuminate\Database\Eloquent\Model;

class CPIGroupWeightsForKenyaCPIOctoberBase1997_Model extends Model
{
    //
      protected $primaryKey = 'group_weight_id';
    protected $table ='cpi_group_weights_for_kenya_cpi_october_base_1997';
    protected $fillable =[    'item_group',
      'household',
      'group_weights'
      
                         ];
}
