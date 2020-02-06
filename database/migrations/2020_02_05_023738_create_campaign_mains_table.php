<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampaignMainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaignmain', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->bigInteger('admincampaigntype_id');
            $table->bigInteger('campaignmode');
            $table->bigInteger('admincrmtype_id');
            $table->date('startdate');
            $table->date('enddate');
            $table->text('notes');
            $table->integer('sendcount');
            $table->boolean('active');
            $table->timestamps();
            
            
            $table->foreign('admincampaigntype_id')->references('id')->on('admincampaigntype');
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
        Schema::dropIfExists('campaignmain');
    }
}
