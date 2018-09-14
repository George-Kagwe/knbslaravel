<?php

namespace App\Models\Population;

use Illuminate\Database\Eloquent\Model;

class vital_statistics_births_and_deaths_by_sex_model extends Model
{
protected $primaryKey = "count_id";
    protected $table = "vital_statistics_births_and_deaths_by_sex";
    protected $fillable = [
    		'county_id',
    		'births',
    		'deaths',
    		'gender',
    		'year'
    		
    ];
}
