<?php

namespace App\Models\Energy;

use Illuminate\Database\Eloquent\Model;

class energy_averagemonthlypumppricesforfuelbycategory_model extends Model
{
<<<<<<< HEAD
      protected $primaryKey = 'count_id';
    protected $table ='energy_averagemonthlypumppricesforfuelbycategory';
    protected $fillable =[ 
                          'county_id',
                          'month_id',
                          'super_petrol',
                          'diesel',
                          'kerosene',
                           'year'

                         ];
=======
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
>>>>>>> 6681263a3204de737dbe429df00444f0928e1a39
}
