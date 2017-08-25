<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
//            $table->integer('person_id')->unsigned();
//            $table->foreign('person_id')->references('id')->on('persons');
            $table->string('name');
            $table->date('birth_date');
            $table->string('document_number');
            $table->string('type_person');
            $table->string('street');
            $table->string('state');
            $table->string('complement');
            $table->string('city');
            $table->string('address');
            $table->string('number');
            $table->string('zip_code');
            $table->string('principal_phone');
            $table->string('secundary_phone');
            $table->smallInteger('status')->default(0);
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
        Schema::dropIfExists('clients');
    }
}
