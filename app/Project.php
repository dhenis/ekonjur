<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Fixer;

class Project extends Model
{
    //

    protected $fillable = [ 'title', 'purpose', 'production_date','user_id'];

    public function fixer(){

        return $this->hasOne(Fixer::class);        

    }
    
    public function one(){

        return $this->hasMany()(One::class);        

    }

    
}
