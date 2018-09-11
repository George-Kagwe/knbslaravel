<?php

namespace App\Models\Trade;

use Illuminate\Database\Eloquent\Model;

class trade_and_commerce_value_of_total_exports_all_destinations_model extends Model
{
     //@Charles Ndirangu
    //Trade and Commerce import trade of afrcan countries Model
    protected $primaryKey = "export_id";
    protected $table = "trade_and_commerce_value_of_total_exports_all_destinations";
    protected $fillable = [
    		'region',
    		'country',
    		'value_in_millions',	
    		'year'
    ]; 
}
