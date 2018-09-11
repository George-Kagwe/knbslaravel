<?php

namespace App\Models\Governance;

use Illuminate\Database\Eloquent\Model;

class murder_cases_and_convictions_obtained_by_high_court_model extends Model
{
    protected $primaryKey = 'reg_murder_convictions_obtained_id';
    protected $table ='governance_murder_cases_and_convictions_obtained_by_high_court';
    protected $fillable =[  'court_station',
       'registered_murder_cases',
      'murder_convictions_obtained',
 'year'


];
}
