<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminUserCustomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usercustom', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
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
            $table->string('notelabel1')->nullable();
            $table->string('notelabel2')->nullable();
            $table->string('notelabel3')->nullable();
            $table->boolean('showcrmclient')->default(1);
            $table->boolean('showcrmprospect')->default(1);
            $table->boolean('showcrmlead')->default(1);
            $table->boolean('showcrmcontact')->default(1);
            $table->boolean('tabchildren')->default(1);
            $table->boolean('tabemployment')->default(1);
            $table->boolean('tabcustom')->default(1);
            $table->boolean('tabnote')->default(1);
            $table->boolean('tabbilling')->default(1);
            $table->boolean('tabcampaign')->default(1);
            $table->timestamps();
            
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
        Schema::dropIfExists('usercustom');
    }
}
