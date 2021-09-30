<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServices extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('Product_Model')->nullable();
            $table->string('Product_Issue', 500)->nullable();
            $table->string('Service_Warranty_Code')->nullable();
            $table->string('Owner')->nullable();
            $table->string('Email')->nullable();
            $table->string('Contact_Number')->nullable();
            $table->string('Address', 500)->nullable();
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
        Schema::dropIfExists('services');
    }
}
