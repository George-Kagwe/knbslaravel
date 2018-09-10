<?php

namespace App\Models\Population;

use Illuminate\Database\Eloquent\Model;

class population_by_sex_and_age_groups_model extends Model
{
     //@Charles Ndirangu
    //population by sex and age group Model
    protected $primaryKey = "group_id";
    protected $table = "population_by_sex_and_age_groups";
    protected $fillable = [
    		'female',
    		'male',
    		'total_population',
    		'age_group'
    ];
}
