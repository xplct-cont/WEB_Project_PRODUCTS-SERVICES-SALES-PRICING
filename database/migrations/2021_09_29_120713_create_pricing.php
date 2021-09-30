<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePricing extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pricing', function (Blueprint $table) {
            $table->id();
            $table->string('Product_Model')->nullable();
            $table->decimal('Product_Price', 10,2)->unsigned();
            $table->string('Product_Discount')->nullable();
            $table->date('Start_Of_Sale');
            $table->date('End_Of_Sale');
            $table->string('Warranty_Code');

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
        Schema::dropIfExists('pricing');
    }
}
