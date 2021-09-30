<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->string('Sold_Product_Brand')->nullable();
            $table->string('Sold_Product_Model')->nullable();
            $table->date('Date_Sold');
            $table->string('Customer_Name')->nullable();
            $table->string('Contact_Number')->nullable();
            $table->string('Product_Warranty_Code');
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
        Schema::dropIfExists('sales');
    }
}
