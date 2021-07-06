<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('quotes', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email');
            $table->string('contact');
            $table->string('company_name');
            $table->string('company_location');
            $table->string('company_services');
            $table->string('company_number_of_employee');
            $table->string('company_demographic');
            $table->boolean('design');
            $table->boolean('development');
            $table->boolean('marketing');
            $table->string('competitors_position');
            $table->string('brand_message_detail');
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

        Schema::dropIfExists('quotes');
    }
}
