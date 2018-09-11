<?php

namespace App\Models\Governance;

use Illuminate\Database\Eloquent\Model;

class Members_Of_NationalAssembly_and_Senators_model extends Model
{
    
    protected $primaryKey = 'woman_id';
    protected $table ='governance_members_of_nationalassembly_and_senators';
    protected $fillable =[  'status',
      'women',
      'men',
      'total',
      'women_percentage'   
];
      


}
