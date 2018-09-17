<?php

namespace App\Models\Governance;

use Illuminate\Database\Eloquent\Model;

class governance_offence_by_sex_and_command_stations_model extends Model
{
    //
      protected $primaryKey = 'offence_id';
    protected $table ='governance_offence_by_sex_and_command_stations';
    protected $fillable =[ 'county_id',
    	'male',
    	'female',
    	
    	'year'
    ];
}
