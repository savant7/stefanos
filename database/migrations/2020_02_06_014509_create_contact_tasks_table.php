<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactcontacttask', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('contactcontactmain_id');
            $table->bigInteger('admintasktype_id');
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
            
            $table->foreign('contactcontactmain_id')->references('id')->on('contactcontactmain');
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
        Schema::dropIfExists('contactcontacttask');
    }
}
