<?php

namespace App\Models\Governance;

use Illuminate\Database\Eloquent\Model;

class magistrates_judges_and_practicing_lawyers_model extends Model
{
    


    protected $primaryKey = 'category_id';
    protected $table ='governance_magistrates_judges_and_practicing_lawyers';
    protected $fillable =[  'category',
       'male',
      'female',
       'year'

];

}
