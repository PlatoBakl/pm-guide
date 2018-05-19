<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComparisonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comparison', function (Blueprint $table) {
            $table->unsignedInteger('methodology_id');
            $table->unsignedInteger('project_id');
            $table->float('hamming');
            $table->float('euclid');

            $table->foreign('methodology_id')->references('id')->on('methodologies')->onDelete('cascade');
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');

            $table->primary(['methodology_id', 'project_id'], 'comparison_primary');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comparison', function (Blueprint $table) {
            $table->dropForeign('comparison_methodology_id_foreign');
            $table->dropForeign('comparison_project_id_foreign');
        });

        Schema::dropIfExists('comparison');
    }
}
