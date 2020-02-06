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
        Schema::create('adminusercustom', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('customfield1');
            $table->string('customfield2');
            $table->string('customfield3');
            $table->string('customfield4');
            $table->string('customfield5');
            $table->string('customfield6');
            $table->string('customfield7');
            $table->string('customfield8');
            $table->string('customfield9');
            $table->string('customfield10');
            $table->string('notelabel1');
            $table->string('notelabel2');
            $table->string('notelabel3');
            $table->boolean('showcrmclient');
            $table->boolean('showcrmprospect');
            $table->boolean('showcrmlead');
            $table->boolean('showcrmcontact');
            $table->boolean('tabchildren');
            $table->boolean('tabemployment');
            $table->boolean('tabcustom');
            $table->boolean('tabnote');
            $table->boolean('tabbilling');
            $table->boolean('tabcampaign');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adminusercustom');
    }
}
