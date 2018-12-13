<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EducationEmployment extends Model
{
        //
    protected $fillable=[
    'project_id',
    'project_role',
    'company_name',
    'company_position',
    'company_address',
    'company_phone',
    'company_email',

    'bank_guarantee_name',
    'bank_guarantee_address',
    'education_record',
    'military_record',
    'has_saving',
    'living_cost',
    'dependant_cost',
    'personal_trip_cost',
    'total_trip_cost',
    'ticket_cost',
    'accomodation_cost',
    'trip_expense',

    'other_pays',
    'payers_name',
    'payers_spend',
    'payers_explaination',
    'total_cost_plus_payers'

    ];


    public function project()
    {
        return $this->belongsTo()(Project::class);
    }


}
