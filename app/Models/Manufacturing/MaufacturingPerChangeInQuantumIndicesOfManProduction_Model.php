<?php

namespace App\Models\Manufacturing;

use Illuminate\Database\Eloquent\Model;

class MaufacturingPerChangeInQuantumIndicesOfManProduction_Model extends Model
{
    //
       protected $primaryKey = 'percentage_change_id';
    protected $table ='manufacturing_per_change_in_quantum_indices_of_man_production';
    protected $fillable =['commodity',
                          'percentage_change',
                           
                           'year'
                         
                         ];
}
