<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medical extends Model
{
    //

    // $table->integer('project_id')->unsigned();
    // $table->foreign('project_id')->references('id')->on('projects');
    
    // $table->text('project_role')->nullable();
    
    // $table->string('has_medical')->nullable();
    // $table->string('pay_treatment')->nullable();
    // $table->string('treatment_organisation')->nullable();
    // $table->string('treatment_address')->nullable();
    // $table->string('treatment_phone')->nullable();
    // $table->string('treatment_email')->nullable();
    // $table->string('treatment_start_date')->nullable();
    // $table->string('treatment_end_date')->nullable();

    protected $fillable = [
        'project_id',
        'has_medical',
        'pay_treatment',
        'treatment_organisation',
        'treatment_address',
        'treatment_phone',
        'treatment_email',
        'treatment_start_date',
        'treatment_end_date'

    ];

    public function project()
    {
        return $this->belongsTo()(Project::class);
    }

}
