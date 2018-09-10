<?php

namespace App\Models\Trade;

use Illuminate\Database\Eloquent\Model;

class trade_and_commerce_import_trade_africa_countries_model extends Model
{
    //@Charles Ndirangu
    //Trade and Commerce import trade of afrcan countries Model
    protected $primaryKey = "import_id";
    protected $table = "trade_and_commerce_import_trade_africa_countries";
    protected $fillable = [
    		'zones',
    		'country',
    		'values',	
    		'year'
    ]; 
}
