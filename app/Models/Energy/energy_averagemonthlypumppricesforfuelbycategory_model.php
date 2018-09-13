<?php

namespace App\Models\Energy;

use Illuminate\Database\Eloquent\Model;

class energy_averagemonthlypumppricesforfuelbycategory_model extends Model
{
    //@Charles Ndirangu
    //Average Monthly Pump Prices For Fuel By Category Model
    protected $primaryKey = "count_id";
    protected $table = "energy_averagemonthlypumppricesforfuelbycategory";
    protected $fillable = [
    		'county_id',
    		'month_id',
    		'super_petrol',
    		'diesel',
    		'kerosene',
    		'year'
    ];
}
