<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePassportTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('passport_travels', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('project_id')->unsigned();
            $table->foreign('project_id')->references('id')->on('projects');
            $table->string('full_name')->nullable();
            $table->string('alias')->nullable();

            $table->date('birth_date')->nullable();
            $table->string('birth_place')->nullable();
            $table->string('gender')->nullable();

            $table->string('nationality')->nullable();
            $table->string('nationality2')->nullable(); // incase other nationalities
            $table->string('passport_number')->nullable();//.
            $table->string('passport_issued_place')->nullable(); // from visa4uk.
            $table->date('passport_issued_date')->nullable(); // from visa4uk
            $table->date('passport_expiry_date')->nullable();
            $table->string('passport_authority')->nullable(); // from visa4uk .
            $table->string('current_location')->nullable(); // from visa4uk
            $table->string('nationality_on_current_location')->nullable(); // from visa4uk
            
            $table->string('is_first_passport')->nullable(); // from visa4uk
            

            // travel information
            $table->date('proposed_visit_date')->nullable(); // arrival date
            $table->date('proposed_visit_place')->nullable(); // arrival date
            $table->integer('duration_stay')->nullable(); // arrival date
            $table->string('accomodation_name')->nullable(); // arrival date
            $table->string('accomodation_address')->nullable(); // arrival date
            $table->string('accomodation_phone')->nullable(); // arrival date
            $table->string('accomodation_email')->nullable(); // arrival date
            
            
            $table->string('emergency_contact_name')->nullable(); // arrival date
            $table->string('emergency_contact_address')->nullable(); // arrival date
            $table->string('emergency_contact_phone')->nullable(); // arrival date
            $table->string('emergency_contact_email')->nullable(); // arrival date
            // $table->string('is_first_passport')->nullable(); // from visa4uk
            
            $table->string('status',5)->nullable(); // for a notice

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
        Schema::dropIfExists('passport_travels');
    }
}
