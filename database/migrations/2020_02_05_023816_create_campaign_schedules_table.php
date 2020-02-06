<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampaignSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaignschedule', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->unsignedBigInteger('campaignmain_id');
            $table->unsignedBigInteger('admincampaigntype_id');
            $table->unsignedBigInteger('admincrmtype_id');
            $table->integer('admincampaignmode');
            $table->unsignedBigInteger('campaigntemplate_id');
            $table->string('templatesubject');
            $table->string('templatebody');
            $table->date('scheduledate');
            $table->time('scheduletime');
            $table->date('sentdate');
            $table->time('senttime');
            $table->integer('sendcount');
            $table->boolean('transferedflag');
            $table->unsignedBigInteger('contactclientmain_id');
            $table->unsignedBigInteger('contactprospectmain_id');
            $table->unsignedBigInteger('contactleadmain_id');
            $table->unsignedBigInteger('contactcontactmain_id');
            $table->boolean('completeflag');
            $table->string('notes');
            $table->boolean('active');
            $table->timestamps();
            
            
            $table->foreign('campaignmain_id')->references('id')->on('campaignmain');
            $table->foreign('admincampaigntype_id')->references('id')->on('admincampaigntype');
            $table->foreign('campaigntemplate_id')->references('id')->on('campaigntemplate');
            $table->foreign('admincrmtype_id')->references('id')->on('admincrmtype');
            $table->foreign('contactclientmain_id')->references('id')->on('contactclientmain');
            $table->foreign('contactprospectmain_id')->references('id')->on('contactprospectmain');
            $table->foreign('contactleadmain_id')->references('id')->on('contactleadmain');
            $table->foreign('contactcontactmain_id')->references('id')->on('contactcontactmain');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campaignschedule');
    }
}
