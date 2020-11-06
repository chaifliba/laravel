<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_data', function (Blueprint $table) {
            $table->increments('id');
            $table->string('senderName')->nullable();
            $table->string('senderAddress')->nullable();
            $table->string('senderPhone')->nullable();
            $table->string('senderCity')->nullable();
            $table->string('senderProvince')->nullable();
            $table->string('senderZipCode')->nullable();
            $table->string('recipientName')->nullable();
            $table->string('recipientAddress')->nullable();
            $table->string('recipientPhone')->nullable();
            $table->string('recipientCity')->nullable();
            $table->string('recipientProvince')->nullable();
            $table->string('recipientZipCode')->nullable();
            $table->longText('quantityDetails')->nullable();
            $table->date('dateProcessed')->nullable();
            $table->string('clientNumber')->nullable();
            $table->longText('descriptionPackage')->nullable();
            $table->string('payby')->nullable();
            $table->string('rate1')->nullable();
            $table->string('rate2')->nullable();
            $table->string('dangermaterial1')->nullable();
            $table->string('dangermaterial2')->nullable();
            $table->string('weight1')->nullable();
            $table->string('weight2')->nullable();
            $table->string('cubage1')->nullable();
            $table->string('cubage2')->nullable();
            $table->string('waitingTime1')->nullable();
            $table->string('waitingTime2')->nullable();
            $table->string('roundTrip')->nullable();
            $table->string('roundTripDetail')->nullable();
            $table->string('truck1')->nullable();
            $table->string('truck2')->nullable();
            $table->string('totalCost')->nullable();
            $table->string('lastMail')->nullable();
            $table->string('deliveryType')->nullable();
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
        Schema::dropIfExists('form_data');
    }
}
