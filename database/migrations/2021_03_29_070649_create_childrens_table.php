<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChildrensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('childrens', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('employee_id')->unsigned();
            $table->string('lname');
            $table->string('fname');
            $table->bigInteger('insurance_id')->unsigned();
            $table->timestamps();
            
            $table->foreign('employee_id')->references('id')->on('employees')->onDelete("CASCADE");
            $table->foreign('insurance_id')->references('id')->on('insurances')->onDelete("CASCADE");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('childrens');
    }
}
