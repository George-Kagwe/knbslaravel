<?php

namespace App\Models\Trade;

use Illuminate\Database\Eloquent\Model;

class trade_and_commerce_trading_centres_model extends Model
{
    //@Charles Ndirangu
    //Trade and commerce trading centers Model
    protected $primaryKey = "tradeandcommerce_centre_id";
    protected $table = "trade_and_commerce_trading_centres";
    protected $fillable = [
    		'county_id',
    		'trading_centre_id',
    		'number',
    		'year'
    ]; 
}
