<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class One extends Model
{
    protected $fillable = [ 'project_id', 
                        'sponsor_letter', 
                        'company_profile',
                         'local_patner'];

    //

    public function project()
    {
        return $this->belongsTo()(Project::class);
    }
}
