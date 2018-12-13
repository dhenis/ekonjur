<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crews', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('project_id')->unsigned();
            $table->foreign('project_id')->references('id')->on('projects');
            $table->string('full_name')->nullable();
            $table->string('alias')->nullable();

            $table->date('birth_date')->nullable();
            $table->string('birth_place')->nullable();
            $table->string('nationality')->nullable();
            $table->string('nationality2')->nullable(); // incase other nationalities
            $table->string('passport_number')->nullable();//.
            $table->string('passport_issued_place')->nullable(); // from visa4uk.
            $table->string('passport_authority')->nullable(); // from visa4uk .
            $table->string('passport_issued_date')->nullable(); // from visa4uk
            $table->date('passport_issued_expiry')->nullable();
            $table->string('current_location')->nullable(); // from visa4uk
            $table->string('nationality_on_current_location')->nullable(); // from visa4uk
            // $table->string('is_first_password')->nullable(); // from visa4uk
            
            // // travel information
            // $table->string('proposed_visit_place')->nullable(); // arrival date
            // $table->date('proposed_visit_date')->nullable(); // arrival date
            // $table->date('duration_stay')->nullable(); // arrival date
            // // $table->string('is_first_passport')->nullable(); // from visa4uk
            



            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('martial_status')->nullable();
            $table->string('spouse_name')->nullable();
            $table->text('military_record')->nullable();
            $table->text('education')->nullable();
            $table->string('project_role')->nullable();
            $table->text('employment_record')->nullable(); 
            $table->string('previous_visit')->nullable(); 
            $table->date('previous_visit_date')->nullable(); 
            $table->string('proposed_visit')->nullable(); // arrival date
            $table->date('proposed_visit_date')->nullable(); // arrival date
            // $table->string('is_first_passport')->nullable(); // from visa4uk
            
            $table->string('company_name')->nullable(); // from visa4uk
            $table->string('position')->nullable(); // from visa4uk
            $table->string('company_address')->nullable(); // from visa4uk
            $table->string('company_phone')->nullable(); // from visa4uk
            $table->string('company_email')->nullable(); // from visa4uk
            $table->string('bank_name')->nullable(); // from visa4uk
            $table->string('bank_address')->nullable(); // from visa4uk
            
            // emergency contact
            $table->string('emergency_contact_name')->nullable();
            $table->string('emergency_contact_address')->nullable();
            $table->string('emergency_contact_phone')->nullable();
            $table->string('emergency_contact_email')->nullable();
            
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
        Schema::dropIfExists('crews');
    }
}
