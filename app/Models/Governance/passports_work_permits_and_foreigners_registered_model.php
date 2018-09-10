<?php

namespace App\Models\Governance;

use Illuminate\Database\Eloquent\Model;

class passports_work_permits_and_foreigners_registered_model extends Model
{
    


    protected $primaryKey = 'passports_permits_registered_foreigners_id';
    protected $table ='governance_passports_work_permits_and_foreigners_registered';
    protected $fillable =[  
             'passport_issued',
       'foreign_nat_reg',
      'work_permit_issued',
      ' work_permit_ren',
      'year'
];





}
