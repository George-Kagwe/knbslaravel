<?php

namespace App\Models\Environment;

use Illuminate\Database\Eloquent\Model;

class environment_and_natural_resources_population_wildlife_model extends Model
{
    //
    protected $primaryKey = 'population_id';
    protected $table ='environment_and_natural_resources_population_wildlife';
    protected $fillable =[
    	                   



                           'buffalo',
							'burchell_zebra', 
							'eland',
							'elephant',

							'gerenuk',
							'giraffe',
							'grant_gazelle',
							'grevy_zebra',

							'hunters_hartebeest',
							'impala',
							'kongoni',
							'kudu',

							'oryx',
							'ostrich',
							'thomson_gazelle',
							'topi',

							'warthog',
							'waterbuck',
							'wildebeest',
							'year'
     
                         ];
}
