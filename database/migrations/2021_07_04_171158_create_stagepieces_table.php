<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStagepiecesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stagepieces', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('stages_id');
            $table->string('piecesjointes_id');
            $table->foreign('stages_id')->references('id')->on('stages');
           // $table->foreign('piecesjointes_id')->cascadeOnDelete()->references('id')->on('piecesjointes');
            $table->string("chemin");

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
        Schema::dropIfExists('stagepieces');
    }
}
