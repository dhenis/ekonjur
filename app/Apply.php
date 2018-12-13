<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apply extends Model
{
    protected $fillable = [
        'fixer', 'fixer_address','fixer_address','fixer_email', 'fixer_phone', 'counterpart',
        'counterpart_address', 'counterpart_phone', 'counterpart_email',
    ];

    public function project()
    {
        return $this->hasOne(Project::class);
    }

    
}
