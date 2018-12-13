<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PassportTravel extends Model
{
    // //
    
    protected $fillable = [
       
        'project_id',
        'full_name',
        'alias',
        'birth_date',
        'birth_place',
        'gender',
        'nationality',
        'nationality2',
        'passport_number',
        'passport_issued_place',
        'passport_issued_date',
        'passport_expiry_date',
        'passport_authority',
        'current_location',
        'nationality_on_current_location',
        'is_first_passport',
        'proposed_visit_date',
        'proposed_visit_place',
        'duration_stay',
        'accomodation_name',
        'accomodation_address',
        'accomodation_phone',
        'accomodation_email',
        'emergency_contact_name',
        'emergency_contact_address',
        'emergency_contact_phone',
        'emergency_contact_email',
        'status'
        
    ];

    public function project()
    {
        return $this->belongsTo()(Project::class);
    }

}
