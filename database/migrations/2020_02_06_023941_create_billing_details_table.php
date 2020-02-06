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
            $table->unsignedBigInteger('billingmain_id');
            $table->unsignedBigInteger('adminbillingchgtype_id');
            $table->unsignedBigInteger('adminbillingpmttype_id');
            $table->dateTime('dateservice');
            $table->double('chgamount');
            $table->double('chgamounttax');
            $table->double('pmtamount');
            $table->text('notes');
            $table->timestamps();
            
            $table->foreign('billingmain_id')->references('id')->on('billingmain');
            $table->foreign('adminbillingchgtype_id')->references('id')->on('adminbillingchgtype');
            $table->foreign('adminbillingpmttype_id')->references('id')->on('adminbillingpmttype');
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
