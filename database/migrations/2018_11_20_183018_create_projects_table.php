<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('code')->nullable();
            $table->string('purpose');
            $table->date('production_date')->nullable();
            // $table->string('accomodation')->nullable(); // move to crew details
            $table->integer('crew_number')->unsigned()->nullable();
            $table->integer('status')->unsigned()->nullable();
            $table->integer('user_id')->unsigned()->nullable();
            // $table->foreign('user_id')->references('id')->on('users');
            

            $table->timestamps();

//             "project_title": null,
// "purpose": null,
// "crew_number": null,
// "head": null,
// "head_address": null,
// "head_phone": null,
// "head_email": null,
// "production_date": null,
// "accomodation": null,
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
