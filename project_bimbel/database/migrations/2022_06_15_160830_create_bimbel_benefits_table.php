<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBimbelBenefitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bimbel_benefits', function (Blueprint $table) {
            $table->id();
            //1st method
           // $table->bigInteger('bimbel_id')->unsigned();
           // $table->unsignedBigInteger('bimbels_id');

           //2nd method
           $table->foreignId('bimbels_id')->constrained();
           $table->string('name');
           $table->timestamps();
           
           //1st method
           //$table->foreign('bimbel_id')->references('id')->on('bimbels')->onDeleted('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bimbel_benefits');
    }
}
