<?php

namespace App\Models\Finance;

use Illuminate\Database\Eloquent\Model;

class finance_outstanding_debt_lending_country_model extends Model
{
    protected $primaryKey = 'lending_country_id';
    protected $table ='finance_outstanding_debt_lending_country';
    protected $fillable =[  'germany',
                          'japan' ,
                          'france' ,
                          'usa' ,
                  
                          'netherlands' ,
                          'denmark' ,
                          'finland' ,
                          'china' ,
                          'belgium' ,
                          'other' ,

                          'year' 
                         ];


}
