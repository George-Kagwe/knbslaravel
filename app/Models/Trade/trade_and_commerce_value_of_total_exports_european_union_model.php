<?php

namespace App\Models\Trade;

use Illuminate\Database\Eloquent\Model;

class trade_and_commerce_value_of_total_exports_european_union_model extends Model
{
    //@Charles Ndirangu
    //Trade and Commerce Value of total Exports to EU Model
    protected $primaryKey = "export_id";
    protected $table = "trade_and_commerce_value_of_total_exports_european_union";
    protected $fillable = [
    		'country',
    		'value_in_millions',
    		'year'
    ]; 
}
