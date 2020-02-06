<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampaignReferUrlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaignreferurl', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('campaignmain_id');
            $table->string('name');
            $table->string('referurl');
            $table->unsignedBigInteger('sendcount');
            $table->text('notes');
            $table->boolean('active');
            $table->timestamps();
            
            $table->foreign('campaignmain_id')->references('id')->on('campaignmain');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campaignreferurl');
    }
}
