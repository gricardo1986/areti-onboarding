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
        Schema::create('identification_documents', function (Blueprint $table) {
            $table->id();
            $table->enum('priority', 
                [
                    'primary', 
                    'secondary',
                ]
            );
            $table->enum('type_document', 
                [
                    'passport', 
                    'drive_license',
                    'government_id',
                ]
            );
            $table->string('file_name')->nullable();

            $table->string('number')->nullable();
            $table->string('document_url')->nullable();

            $table->unsignedBigInteger('issued_by')->nullable();
            $table->foreign('issued_by')->references('id')->on('countries');

            $table->dateTime("expiration_date")->nullable();
            $table->unsignedBigInteger('person_id')->nullable();
            $table->foreign('person_id')->references('id')->on('persons');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('identification_documents');
    }
};
