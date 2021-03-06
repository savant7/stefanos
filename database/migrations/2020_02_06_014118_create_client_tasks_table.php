<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactclienttask', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('contactclientmain_id');
            $table->unsignedBigInteger('admintasktype_id');
            $table->dateTime('scheduledate');
            $table->dateTime('sentdate');
            $table->string('emailheader');
            $table->string('emailbody');
            $table->string('emailto');
            $table->string('emailfrom');
            $table->string('emailcc');
            $table->string('emailbcc');
            $table->boolean('active');
            $table->timestamps();
            
            $table->foreign('contactclientmain_id')->references('id')->on('contactclientmain');
            $table->foreign('admintasktype_id')->references('id')->on('admintasktype');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contactclienttask');
    }
}
