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
        Schema::create('persons', function (Blueprint $table) {
            $table->id();
            $table->enum("us_person",['yes', 'no'])->nullable();
            $table->unsignedBigInteger('account_id');
            $table->foreign('account_id')->references('id')->on('accounts');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->unsignedBigInteger('phone_code_id');
            $table->foreign('phone_code_id')->references('id')->on('countries');
            $table->string('phone_number');

            $table->string('date_birth')->nullable();
            $table->unsignedBigInteger('country_birth_id')->nullable();
            $table->foreign('country_birth_id')->references('id')->on('countries');
            $table->string('social_security_number')->nullable();
            $table->string('driver_license')->nullable();

            $table->string('employer')->nullable();
            $table->string('annual_income')->nullable();
            $table->unsignedBigInteger('occupation_id')->nullable();
            $table->foreign('occupation_id')->references('id')->on('occupations');
            $table->unsignedBigInteger('customer_subtype_id')->nullable();
            $table->foreign('customer_subtype_id')->references('id')->on('customers_subtype');
            $table->longtext('description_position')->nullable();
            $table->enum("political_exposure_disclosure",[1,0])->nullable();

            $table->unsignedBigInteger('signer_owner_id')->nullable();
            $table->foreign('signer_owner_id')->references('id')->on('persons');
            $table->uuid('index_signer');

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
        Schema::dropIfExists('people');
    }
};
