<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FamilyFriends extends Model
{
    protected $fillable = [
        'project_id',
        'marital_status',
        'spouse_name',
        'spouse_nationality',
        'spouse_birth',
        'spouse_living_together',
        'father_name',
        'father_nationality',
        'father_birth_date',
        'father_birth_place',
        'mother_name',
        'mother_nationality',
        'mother_birth_date',
        'mother_birth_place',
        'has_children',
        'has_friends',
        'status'
    ];

    public function project()
    {
        return $this->belongsTo()(Project::class);
    }

    
}
