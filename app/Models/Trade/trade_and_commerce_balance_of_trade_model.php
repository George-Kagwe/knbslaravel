<?php

namespace App\Models\Trade;

use Illuminate\Database\Eloquent\Model;

class trade_and_commerce_balance_of_trade_model extends Model
{ 
     //@Charles Ndirangu
    //Trade and Commerce balance of trade Model
    protected $primaryKey = "trade_id";
    protected $table = "trade_and_commerce_balance_of_trade";
    protected $fillable = [
    		'description',
    		'amount_in_millions',
    		'year'
    ]; 
}
