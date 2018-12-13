<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonalDetailHistory extends Model
{

    //
    protected $fillable =[
      'project_id' ,  
      'address' ,  
      'phone' ,  
      'email' ,  
      'address_duration' ,  
      'secondary_address' ,  
      'secondary_phone' ,  
      'secondary_email' ,  
      'has_visited' ,  
      'refused_entry' ,  
      'refused_visa' ,  
      'deported' ,  
      'exclusion' ,  
      'travel_abroad' ,  
      'criminal_record' ,  
      'arrested_record' ,  
      'supporting_terorrism' ,  
      'medium_terorrism' ,  
      'supporting_warcrimes' ,  
      'maybe_rejected' ,  
      'penalty_record' ,  
      'status'   

    ];

}
