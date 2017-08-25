<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('client_id')->unsigned();
            $table->foreign('client_id')->references('id')->on('clients');
            $table->string('name');
            $table->integer('security_quantity');
            $table->dateTime('started_date');
            $table->dateTime('termination_date');
            $table->string('street');
            $table->string('state');
            $table->string('complement');
            $table->string('city');
            $table->string('address');
            $table->string('zip_code');
            $table->string('principal_phone');
            $table->string('secundary_phone');
            $table->smallInteger('status')->default(0);
            $table->text('comments');
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
        Schema::dropIfExists('events');
    }
}
