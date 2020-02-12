<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillingMainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billingmain', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->unsignedBigInteger('contactclient_id');
            $table->dateTime('dateservice');
            $table->dateTime('datebilling')->nullable();
            $table->dateTime('datepaid')->nullable();
            $table->double('totalamount');
            $table->double('totaltax')->nullable();
            $table->boolean('paidinfull');
            $table->string('notes')->nullable();
            $table->boolean('system');
            $table->boolean('active');
            $table->timestamps();
            
            $table->foreign('contactclient_id')->references('id')->on('contactclientmain');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('billingmain');
    }
}
