<?php

namespace App\Models\Governance;

use Illuminate\Database\Eloquent\Model;

class governance_identity_cards_made_processed_and_collected_model extends Model
{
    //
     protected $primaryKey = 'nprs_id';
    protected $table ='governance_identity_cards_made_processed_and_collected';
    protected $fillable =[ 'county_id',
    	'npr_apps_made',
    	'npr_ids_prod',
    	'npr_ids_collected',
    	'year'
                                                  
                         ];
}
