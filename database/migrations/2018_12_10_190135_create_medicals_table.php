<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicals', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('project_id')->unsigned();
            $table->foreign('project_id')->references('id')->on('projects');
            
            $table->string('has_medical')->nullable();
            $table->string('pay_treatment')->nullable();
            $table->string('treatment_organisation')->nullable();
            $table->string('treatment_address')->nullable();
            $table->string('treatment_phone')->nullable();
            $table->string('treatment_email')->nullable();
            $table->string('treatment_start_date')->nullable();
            $table->string('treatment_end_date')->nullable();
            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medicals');
    }
}
