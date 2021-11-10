<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecommandationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recommandations', function (Blueprint $table) {
            $table->bigInteger('idservice')->unsigned();
            $table->bigInteger('idqualite')->unsigned();

            $table->primary(array('idservice', 'idqualite'));
            $table->foreign('idservice')->references('idservice')->on('services');
            $table->foreign('idqualite')->references('idqualite')->on('qualiteclients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recommandations');
    }
}
