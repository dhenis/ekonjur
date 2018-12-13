<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalDetailHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_detail_histories', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('project_id')->unsigned();
            $table->foreign('project_id')->references('id')->on('projects');

            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('address_duration')->nullable();


            $table->string('secondary_address')->nullable();
            $table->string('secondary_phone')->nullable();
            $table->string('secondary_email')->nullable();
            
            $table->string('has_visited')->nullable();
            // table previous visit
            // $table->string('enter_indonesia')->nullable();
            

            // criminal history
            $table->string('refused_entry')->nullable();
            $table->string('refused_visa')->nullable();
            $table->string('deported')->nullable();
            $table->string('exclusion')->nullable();
            $table->string('travel_abroad')->nullable();
            $table->string('criminal_record')->nullable();
            $table->string('arrested_record')->nullable();
            $table->string('supporting_terorrism')->nullable();
            $table->string('medium_terorrism')->nullable();
            $table->string('supporting_warcrimes')->nullable();
            $table->string('maybe_rejected')->nullable();
            $table->string('penalty_record')->nullable();

            $table->string('status')->nullable(); // for a notice

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
        Schema::dropIfExists('personal_detail_histories');
    }
}
