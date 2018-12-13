<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFamilyFriendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('family_friends', function (Blueprint $table) {
            $table->increments('id');
            // connect to project id
            $table->integer('project_id')->unsigned();
            $table->foreign('project_id')->references('id')->on('projects');

            $table->string('marital_status')->nullable();
            $table->string('spouse_name')->nullable();
            $table->string('spouse_nationality')->nullable();
            $table->date('spouse_birth')->nullable();
            $table->string('spouse_living_together')->nullable();
            
            $table->string('father_name')->nullable();
            $table->string('father_nationality')->nullable();
            // $table->string('father_nationality')->nullable();
            $table->date('father_birth_date')->nullable();
            $table->string('father_birth_place')->nullable();
            
            $table->string('mother_name')->nullable();
            $table->string('mother_nationality')->nullable();
            // $table->string('mother_nationality')->nullable();
            $table->date('mother_birth_date')->nullable();
            $table->string('mother_birth_place')->nullable();
            
            
            
            $table->string('has_children')->nullable();
            //table children

            $table->string('has_friends')->nullable();
            // table friends
            
            $table->string('status')->nullable();


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
        Schema::dropIfExists('family_friends');
    }
}
