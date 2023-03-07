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
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->enum('account_type', 
                [
                    'virtue_checking_account', 
                    'virtue_saving_account',
                    'zustennials_saving_account',
                    'bussiness_checking_account'
                ]
            );
            $table->enum('term_use', [0, 1])->default(0);
            $table->string("step")->nullable();
            $table->string("selected_another_signer")->nullable();
            $table->enum('status', 
                [
                    'created',
                    'activated',
                    'incomplete',
                    'completed',
                    'approved',
                    'rejected',
                    'expired'
                ]
            );
            $table->text("status_description")->nullable();
            $table->string("verification_code")->unique();
            $table->string("random_code")->unique();
            $table->enum("check_agreement",['0', '1'])->default('0');

            $array_average_account=[
                "Greater than $25000",
                "Between $5000 and $25000",
                "Less Than $5000"
            ];
            $array_quantity=[
                "Greater than 5 transactions",
                "Between 3 and 5",
                "Less than 3"
            ];

            $table->enum("incoming_average_account",$array_average_account)->nullable();
            $table->enum("incoming_quantity",$array_quantity)->nullable();
            $table->enum("outgoing_average_account",$array_average_account)->nullable();
            $table->enum("outgoing_quantity",$array_quantity)->nullable();
            $table->enum("check_deposit_average_account",$array_average_account)->nullable();
            $table->enum("check_deposit_quantity",$array_quantity)->nullable();

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
        Schema::dropIfExists('accounts');
    }
};
