<?php

namespace App\Models\Governance;

use Illuminate\Database\Eloquent\Model;

class firearms_and_ammunition_recovered_or_surrendered_model extends Model
{
    

 protected $primaryKey = 'category_id';
    protected $table ='governance_firearms_and_ammunition_recovered_or_surrendered';
    protected $fillable =[   'category',
      'rifles',
      'pistols',
      'toy_pistols',
      'ammunition',
            'year'
                         ];



}
