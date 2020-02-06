<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProspectCampaignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactprospectcampaign', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('campaignmain_id');
            $table->bigInteger('campaignschedule_id');
            $table->bigInteger('contactprospectmain_id');
            $table->bigInteger('admincampaigntype_id');
            $table->bigInteger('campaigntemplate_id');
            $table->bigInteger('admincrmtype_id');
            $table->integer('admincampaignmode');
            $table->string('templatesubject');
            $table->string('templatebody');
            $table->date('scheduledate');
            $table->time('scheduletime');
            $table->date('sentdate');
            $table->time('senttime');
            $table->integer('sendcount');
            $table->boolean('transferedflag');
            $table->boolean('completeflag');
            $table->string('notes');
            $table->boolean('active');
            $table->timestamps();
            
            $table->foreign('campaignmain_id')->references('id')->on('campaignmain');
            $table->foreign('campaignschedule_id')->references('id')->on('campaignschedule');
            $table->foreign('contactprospectmain_id')->references('id')->on('contactprospectmain');
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
        Schema::dropIfExists('contactprospectcampaign');
    }
}
