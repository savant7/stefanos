<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebleadsTable extends Migration
{
    

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactleadmain', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('firstname1');
            $table->string('lastname1');
            $table->string('firstname2')->nullable();
            $table->string('lastname2')->nullable();
            $table->string('address1')->nullable();
            $table->string('address2')->nullable();
            $table->string('addresscity')->nullable();
            $table->string('addressprov')->nullable();
            $table->string('addresspostal')->nullable();
            $table->string('email1')->nullable();
            $table->string('email2')->nullable();
            $table->string('email3')->nullable();
            $table->string('email4')->nullable();
            $table->string('phone1')->nullable();
            $table->string('phone2')->nullable();
            $table->string('phone3')->nullable();
            $table->string('phone4')->nullable();
            $table->string('employername')->nullable();
            $table->string('employertitle')->nullable();
            $table->string('employeraddress1')->nullable();
            $table->string('employeraddress2')->nullable();
            $table->string('employeraddresscity')->nullable();
            $table->string('employeraddressprov')->nullable();
            $table->string('employeraddresspostal')->nullable();
            $table->string('employerphone')->nullable();
            $table->date('birthdate1')->nullable();
            $table->date('birthdate2')->nullable();
            $table->string('childname1')->nullable();
            $table->string('childname2')->nullable();
            $table->string('childname3')->nullable();
            $table->string('childname4')->nullable();
            $table->date('childbirthdate1')->nullable();
            $table->date('childbirthdate2')->nullable();
            $table->date('childbirthdate3')->nullable();
            $table->date('childbirthdate4')->nullable();
            $table->unsignedBigInteger('relatedclient_id')->nullable();
            $table->unsignedBigInteger('admincrmtype_id');
            $table->unsignedBigInteger('adminclienttype_id');
            $table->unsignedBigInteger('adminclientratingtype_id');
            $table->unsignedBigInteger('adminleadtype_id');
            $table->string('customfield1')->nullable();
            $table->string('customfield2')->nullable();
            $table->string('customfield3')->nullable();
            $table->string('customfield4')->nullable();
            $table->string('customfield5')->nullable();
            $table->string('customfield6')->nullable();
            $table->string('customfield7')->nullable();
            $table->string('customfield8')->nullable();
            $table->string('customfield9')->nullable();
            $table->string('customfield10')->nullable();
            $table->boolean('active');
            $table->string('notes1')->nullable();
            $table->string('notes2')->nullable();
            $table->string('notes3')->nullable();
            $table->timestamps();


            $table->foreign('admincrmtype_id')->references('id')->on('admincrmtype');
            $table->foreign('adminclienttype_id')->references('id')->on('adminclienttype');
            $table->foreign('adminclientratingtype_id')->references('id')->on('adminclientratingtype');
            $table->foreign('adminleadtype_id')->references('id')->on('adminleadtype');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contactleadmain');
    }
}
