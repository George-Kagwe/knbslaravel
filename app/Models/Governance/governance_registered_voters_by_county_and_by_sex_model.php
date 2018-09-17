<?php

namespace App\Models\Governance;

use Illuminate\Database\Eloquent\Model;

class governance_registered_voters_by_county_and_by_sex_model extends Model
{
    //
        protected $primaryKey = 'voters_id';
    protected $table ='governance_registered_voters_by_county_and_by_sex';
    protected $fillable =['county_id',
                          'subcounty_id',
                          'reg_voters',
                          'gender'
                         ];
}
