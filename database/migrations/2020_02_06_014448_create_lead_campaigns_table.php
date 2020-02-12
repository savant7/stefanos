<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadCampaignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactleadcampaign', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('campaignmain_id');
            $table->unsignedBigInteger('campaignschedule_id');
            $table->unsignedBigInteger('contactleadmain_id');
            $table->unsignedBigInteger('admincampaigntype_id');
            $table->unsignedBigInteger('campaigntemplate_id');
            $table->unsignedBigInteger('admincrmtype_id');
            $table->integer('admincampaignmode');
            $table->string('templatesubject');
            $table->string('templatebody');
            $table->date('scheduledate');
            $table->time('scheduletime');
            $table->date('sentdate')->nullable();
            $table->time('senttime')->nullable();
            $table->integer('sendcount')->default(0);
            $table->boolean('transferedflag');
            $table->boolean('completeflag');
            $table->string('notes');
            $table->boolean('active');
            $table->timestamps();
            
            $table->foreign('campaignmain_id')->references('id')->on('campaignmain');
            $table->foreign('campaignschedule_id')->references('id')->on('campaignschedule');
            $table->foreign('contactleadmain_id')->references('id')->on('contactleadmain');
            $table->foreign('admincampaigntype_id')->references('id')->on('admincampaigntype');
            $table->foreign('campaigntemplate_id')->references('id')->on('campaigntemplate');
            $table->foreign('admincrmtype_id')->references('id')->on('admincrmtype');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contactleadcampaign');
    }
}
