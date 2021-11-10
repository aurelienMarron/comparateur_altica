<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSimulationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('simulations', function (Blueprint $table) {
            $table->id('idsimulation');
            $table->integer('nbmots');
            $table->bigInteger('qualite')->unsigned();
            $table->boolean('bat');
            $table->string('chemin');
            $table->bigInteger('langue_source')->unsigned();
            $table->bigInteger('langue_cible')->unsigned();
            $table->timestamp('created_at');
            $table->bigInteger('idservice')->unsigned()->nullable();
            $table->float('coutmin')->nullable();
            $table->float('coutmax')->nullable();
            $table->integer('delaimin')->nullable();
            $table->integer('delaimax')->nullable();
            $table->bigInteger('contact')->unsigned()->nullable();
            

            $table->foreign('qualite')->references('idqualite')->on('recommandations');
            $table->foreign('langue_source')->references('idlang')->on('langues');
            $table->foreign('langue_cible')->references('idlang')->on('langues');
            $table->foreign('idservice')->references('idservice')->on('services');
            $table->foreign('contact')->references('idcontact')->on('contacts');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('simulations');
    }
}