<?php

namespace App\Models\Finance;

use Illuminate\Database\Eloquent\Model;

class finance_excise_revenue_commodity_model extends Model
{
    
    protected $primaryKey = 'excise_id';
    protected $table ='finance_excise_revenue_commodity';
    protected $fillable =[ 'beer',
                          'cigarettes',
                          'mineral_waters' ,
                          'wines_spirits',
                    
                          'other_commodities' ,
                          'year' 


                         ];




    }
