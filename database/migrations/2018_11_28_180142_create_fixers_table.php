<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFixersTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('fixers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('project_id')->unsigned();
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
            $table->string('fixer')->nullable();
            $table->string('fixer_address')->nullable();
            $table->string('fixer_phone')->nullable();
            $table->string('fixer_email')->nullable();
            $table->string('counterpart')->nullable();
            $table->string('counterpart_address')->nullable();
            $table->string('counterpart_phone')->nullable();
            $table->string('counterpart_email')->nullable();
            $table->timestamps();

            // "fixer": null,
// "fixer_address": null,
// "fixer_phone": null,
// "counterpart": null,
// "counterpart_address": null,
// "counterpart_phone": null,
// "counterpart_email": null
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('fixers');
    }
}
