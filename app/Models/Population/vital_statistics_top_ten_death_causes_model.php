<?php

namespace App\Models\Population;

use Illuminate\Database\Eloquent\Model;

class vital_statistics_top_ten_death_causes_model extends Model
{
  protected $primaryKey = "count_id";
    protected $table = "vital_statistics_top_ten_death_causes";
    protected $fillable = [
    		'county_id',
    		'cause_id',
    		'percent',
    		'total',
    		'gender',
    		'year'
    	
    ];
}
