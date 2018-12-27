<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TimeTable extends Model
{
    //
    // $table->foreign('project_id')->references('id')->on('projects');
            
    // $table->date('date')->nullable();
    // $table->string('location')->nullable();
    // $table->text('activity')->nullable();
    
    
    // $table->string('status')->nullable();


    protected $fillable= [
        'project_id',
        'date',
        'location',
        'activity',
        'status'
    ];

    public function project()
    {
        return $this->belongsTo()(Project::class);
    }
}
