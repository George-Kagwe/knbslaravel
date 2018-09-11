<?php

namespace App\Models\Trade;

use Illuminate\Database\Eloquent\Model;

class trade_and_commerce_values_of_principal_imports_model extends Model
{
    //@Charles Ndirangu
    //Trade and Commerce Value of Principal Imports Model
    protected $primaryKey = "trade_id";
    protected $table = "trade_and_commerce_values_of_principal_imports";
    protected $fillable = [
    		'description',
    		'quantity',
    		'year'
    ];
}