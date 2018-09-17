<?php

namespace App\Models\Trade;

use Illuminate\Database\Eloquent\Model;

class trade_and_commerce_revenue_collection_by_amount_model extends Model
{
    //@Charles Ndirangu
    //Trade and commerce revenue collection by amount Model
    protected $primaryKey = "tradeandcommerce_id";
    protected $table = "trade_and_commerce_revenue_collection_by_amount";
    protected $fillable = [
    		'county_id',
    		'revenuecollection_id',
    		'amount',
    		'year'
    ]; 
}
 