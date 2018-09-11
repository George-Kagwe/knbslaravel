<?php

namespace App\Models\Manufacturing;

use Illuminate\Database\Eloquent\Model;

class MaufacturingQuantumIndicesOfManufacturingProduction_Model extends Model
{
    //
       protected $primaryKey = 'quantum_indice_id';
    protected $table ='manufacturing_quantum_indices_of_manufacturing_production';
    protected $fillable =['commodity',
                          'quantum_indice',
                           
                           'year'
                         
                         ];
}
