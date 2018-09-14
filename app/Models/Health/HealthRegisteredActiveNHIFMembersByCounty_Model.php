<?php

namespace App\Models\Health;

use Illuminate\Database\Eloquent\Model;

class HealthRegisteredActiveNHIFMembersByCounty_Model extends Model
{
    //
      protected $primaryKey = 'member_id';
    protected $table ='health_registered_active_nhif_members_by_county';
    protected $fillable =[ 'county_id',
    	'formal',
                          'informal',
                          'year'
                                                  
                         ];
}
