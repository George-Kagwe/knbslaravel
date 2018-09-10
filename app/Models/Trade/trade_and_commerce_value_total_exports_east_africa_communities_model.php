<?php

namespace App\Models\Trade;

use Illuminate\Database\Eloquent\Model;

class trade_and_commerce_value_total_exports_east_africa_communities_model extends Model
{
    //@Charles Ndirangu
    //Trade and Commerce Value of total Exports to East Africa Model
    protected $primaryKey = "export_id";
    protected $table = "trade_and_commerce_value_total_exports_east_africa_communities";
    protected $fillable = [
    		'country',
    		'value_in_millions',
    		'year'
    ];
}
