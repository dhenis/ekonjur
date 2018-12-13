<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationEmploymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education_employments', function (Blueprint $table) {
            $table->increments('id');
          
            $table->integer('project_id')->unsigned();
            $table->foreign('project_id')->references('id')->on('projects');
            
            $table->text('project_role')->nullable();
            

            $table->string('company_name')->nullable();
            $table->string('company_position')->nullable();
            $table->string('company_address')->nullable();
            $table->string('company_phone')->nullable();
            $table->string('company_email')->nullable();
            
            $table->string('bank_guarantee_name')->nullable();
            $table->string('bank_guarantee_address')->nullable();

            $table->string('education_record')->nullable();
            // table education

            $table->text('military_record')->nullable();

            $table->string('has_saving')->nullable();
            // table source income

            $table->string('living_cost')->nullable();
            $table->string('dependant_cost')->nullable();
            $table->string('personal_trip_cost')->nullable();
            $table->string('total_trip_cost')->nullable();
            $table->string('ticket_cost')->nullable();
            $table->string('accomodation_cost')->nullable();
            $table->string('trip_expense')->nullable();
            
            $table->string('other_pays')->nullable();
            $table->string('payers_name')->nullable();
            $table->string('payers_spend')->nullable();
            $table->string('payers_explaination')->nullable();
            
            
            $table->string('total_cost_plus_payers')->nullable();

            

            



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
        Schema::dropIfExists('education_employments');
    }
}
