<?php

namespace App\Models\Trade;

use Illuminate\Database\Eloquent\Model;

class trade_and_commerce_quantities_principal_domestic_exports_model extends Model
{
     //@Charles Ndirangu
    //Trade and Commerce Principal Domestic Exports Model
    protected $primaryKey = "trade_id";
    protected $table = "trade_and_commerce_quantities_principal_domestic_exports";
    protected $fillable = [
    		'description',
    		'quantity',
    		'year'
    ]; 
}
