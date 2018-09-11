<?php

namespace App\Models\Governance;

use Illuminate\Database\Eloquent\Model;

class caseshandledbyvariouscourts_model extends Model
{
   protected $primaryKey = 'court_id';
    protected $table ='governance_cases_handled_by_various_courts';
    protected $fillable =[   'category',
      'kadhis_court',
      'magistrate_court',
      'high_court',
      'court_of_appeal',
      'supreme_court',
      'year'
                         ];

}
