<?php

namespace App\Models\Health;

use Illuminate\Database\Eloquent\Model;

class HealthNhifMembers_Model extends Model
{
    //
     protected $primaryKey = 'nhif_member_id';
    protected $table ='health_nhif_members';
    protected $fillable =['formal_sector',
                          'informal_sector',
                          'total',                          
                          'year'
                         ];
}
