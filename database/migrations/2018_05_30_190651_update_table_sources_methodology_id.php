<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTableSourcesMethodologyId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sources', function (Blueprint $table) {
            $table->unsignedInteger('methodology_id')->nullable();

            $table->foreign('methodology_id')
                ->references('id')->on('methodologies')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sources', function (Blueprint $table) {

            $table->dropForeign('sources_methodology_id_foreign');

            $table->dropColumn('methodology_id');
        });
    }
}
