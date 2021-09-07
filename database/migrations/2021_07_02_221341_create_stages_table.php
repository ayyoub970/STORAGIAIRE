<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('stagiaire_id');
            $table->foreign('stagiaire_id')->references('id')->on('stagiaires');
            $table->string("type");
            $table->date('date_du');
            $table->date('date_au');
            $table->string("duree");
            $table->string("etablissement");
            $table->string("formation");
            $table->string("intitule_projet");
            $table->string("description_projet");
            $table->integer("etat")->default('1');
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
        
    DB::statement('SET FOREIGN_KEY_CHECKS = 0');
    Schema::drop('stages');
    DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        
    }
}
