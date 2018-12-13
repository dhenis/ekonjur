<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crews extends Model
{
    //


    protected $fillable = [
        'project_id',
        'full_name',
        'birth_date',
        'birth_place',
        'nationality',
        'nationality2',
        'passport_number',
        'passport_issued_place',
        'passport_authority',
        'passport_issued_date',
        'validity',
        'current_location',
        'nationality_on_current_location',
        'address',
        'phone',
        'email',
        'martial_status',
        'spouse_name',
        'military_record',
        'education',
        'project_role',
        'employment_record',
        'previous_visit',
        'previous_visit_date',
        'proposed_visit',
        'proposed_visit_date',
        'company_name',
        'position',
        'company_address',
        'company_phone',
        'company_email',
        'bank_name',
        'bank_address',
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
