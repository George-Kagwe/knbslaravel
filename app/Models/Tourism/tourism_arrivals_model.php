<?php

namespace App\Models\Tourism;

use Illuminate\Database\Eloquent\Model;

class tourism_arrivals_model extends Model
{
    //@Charles Ndirangu
    //Tourism Arival Model
    protected $primaryKey = "arrivals_id";
    protected $table = "tourism_arrivals";
    protected $fillable = [
    		'quarter',
    		'holiday',
    		'business', 
    		'transit',
    		'other',
    		'year'
    ]; 
}
 