<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillingDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billingdetails', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->bigInteger('billingmain_id');
            $table->bigInteger('adminbilllingchgtype_id');
            $table->bigInteger('adminbilllingpmttype_id');
            $table->dateTime('dateservice');
            $table->double('chgamount');
            $table->double('chgamounttax');
            $table->double('pmtamount');
            $table->text('notes');
            $table->timestamps();
            
            $table->foreign('billingmain_id')->references('id')->on('billingmain');
            $table->foreign('adminbilllingchgtype_id')->references('id')->on('adminbilllingchgtype');
            $table->foreign('adminbilllingpmttype_id')->references('id')->on('adminbilllingpmttype');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('billingdetails');
    }
}
