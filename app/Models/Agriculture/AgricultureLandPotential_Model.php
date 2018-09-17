<?php

namespace App\Models\Agriculture;

use Illuminate\Database\Eloquent\Model;

class AgricultureLandPotential_Model extends Model
{
    //
     protected $primaryKey = 'land_id';
    protected $table ='agriculture_land_potential';
    protected $fillable =['county_id',
                          'subcounty_id',
                          'potential_id',
                          'value'
                         ];
}
