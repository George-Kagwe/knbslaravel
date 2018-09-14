<?php

namespace App\Models\Finance;

use Illuminate\Database\Eloquent\Model;

class finance_statement_of_national_government_operations_model extends Model
{
    

 protected $primaryKey = 'operation_id';
    protected $table ='finance_statement_of_national_government_operations';
    protected $fillable =['national_government_operation',
                          'amount_in_millions',
                           'year'
                         ];








    
}
