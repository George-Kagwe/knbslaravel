<?php

namespace App\Models\CPI;

use Illuminate\Database\Eloquent\Model;

class CPIGroupWeightsForKenyaCPIFebruaryBase2009_Model extends Model
{
    //
           protected $primaryKey = 'group_weights_id';
    protected $table ='cpi_group_weights_for_kenya_cpi_febuary_base_2009';
    protected $fillable =[    'description',
      'household',
      'group_weights'
      
                         ];
}
