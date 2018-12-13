<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fixer extends Model
{

    protected $fillable = [
        'fixer', 'fixer_address', 'fixer_phone','fixer_email', 'counterpart',
        'counterpart_address', 'counterpart_phone', 'counterpart_email',
    ];

    public function project()
    {
        return $this->belongsTo()(Project::class);
    }



    // protected $fixer = 'fixer'; // find fixer table

    
}
