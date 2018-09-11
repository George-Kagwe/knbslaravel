<?php

namespace App\Models\Tourism;

use Illuminate\Database\Eloquent\Model;

class tourism_conference_model extends Model
{
     //@Charles Ndirangu
    //Tourism conference Model
    protected $primaryKey = "conference_id";
    protected $table = "tourism_conferences";
    protected $fillable = [
    		'category',
    		'number_of_conferences',
    		'number_of_delegates', 
    		'year'
    ]; 
}
 