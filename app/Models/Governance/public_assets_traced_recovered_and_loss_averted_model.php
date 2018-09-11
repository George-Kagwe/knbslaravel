<?php

namespace App\Models\Governance;

use Illuminate\Database\Eloquent\Model;

class public_assets_traced_recovered_and_loss_averted_model extends Model
{
    

    protected $primaryKey = 'category_id';
    protected $table ='governance_public_assets_traced_recovered_and_loss_averted';
    protected $fillable =[  'public_assets_traced',
       'public_assets_recovered',
      'loss_averted',
       'year'

];




}
