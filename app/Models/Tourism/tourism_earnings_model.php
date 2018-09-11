<?php

namespace App\Models\Tourism;

use Illuminate\Database\Eloquent\Model;

class tourism_earnings_model extends Model
{
     //@Charles Ndirangu
    //Tourism Earnings Model
    protected $primaryKey = "earnings_id";
    protected $table = "tourism_earnings";
    protected $fillable = [
    		'category',
    		'tourism_earnings_billions',
    		'year'
    ]; 
}
