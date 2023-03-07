<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address', function (Blueprint $table) {
            $table->id();
            $table->enum('priority', 
                [
                    'home', 
                    'mailing',
                ]
            )->default('home');
            $table->unsignedBigInteger('person_id');
            $table->foreign('person_id')->references('id')->on('persons');
            $table->string('street_address')->nullable();
            $table->unsignedBigInteger('country_address_id')->nullable();
            $table->foreign('country_address_id')->references('id')->on('countries');
            $table->string('city_address')->nullable();
            $table->string('state_address')->nullable();
            $table->string('zip_code_address')->nullable();
            $table->string('file_name')->nullable();
            $table->string('address_url_file')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('address');
    }
};
