<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCombinationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('combinations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->unsignedInteger('project_id');
            $table->longText('value')->nullable();
            $table->float('total_process_min')->nullable();
            $table->float('total_process_current')->nullable();
            $table->float('total_process_max')->nullable();
            $table->float('total_risk_min')->nullable();
            $table->float('total_risk_current')->nullable();
            $table->float('total_risk_max')->nullable();
            $table->float('total_team_min')->nullable();
            $table->float('total_team_current')->nullable();
            $table->float('total_team_max')->nullable();
            $table->timestamps();

            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('combinations');
    }
}
