<?php

namespace App\Models\Governance;

use Illuminate\Database\Eloquent\Model;

class crimes_reported_to_police_by_command_stations_model extends Model
{
    

protected $primaryKey = 'crime_id';
    protected $table ='governance_crimes_reported_to_police_by_command_stations';
    protected $fillable =['county_id',
                          'crimes',
                           'year'
                         ];


    }
