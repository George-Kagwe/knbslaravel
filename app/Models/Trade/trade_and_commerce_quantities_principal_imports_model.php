<?php

namespace App\Models\Trade;

use Illuminate\Database\Eloquent\Model;

class trade_and_commerce_quantities_principal_imports_model extends Model
{
    //@Charles Ndirangu
    //Trade and Commerce quantity of principal imports Model
    protected $primaryKey = "trade_id";
    protected $table = "trade_and_commerce_quantities_principal_imports";
    protected $fillable = [
    		'commodity',
    		'unit_of_quantity',
    		'quantity',	
    		'year'
    ]; 
}
