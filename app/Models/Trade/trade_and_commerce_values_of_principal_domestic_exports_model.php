<?php

namespace App\Models\Trade;

use Illuminate\Database\Eloquent\Model;

class trade_and_commerce_values_of_principal_domestic_exports_model extends Model
{
    //@Charles Ndirangu
    //Trade and Commerce Value of Principal Domestic Exports Model
    protected $primaryKey = "trade_id";
    protected $table = "trade_and_commerce_values_of_principal_domestic_exports";
    protected $fillable = [
    		'description',
    		'values',
    		'year'
    ];
}
