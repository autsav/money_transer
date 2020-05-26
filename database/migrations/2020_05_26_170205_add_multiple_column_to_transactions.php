<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMultipleColumnToTransactions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('transactions', function (Blueprint $table) {

            $table->unsignedBigInteger('bank_id');
            $table->foreign('bank_id')->references('id')->on('banks');
            $table->bigInteger('account_number');
            $table->string('fullname');
            $table->string('from_currency');
            $table->string('to_currency');
            $table->float('exchange_rate', 8 ,2);
            $table->float('fee',8 ,2);
            $table->string('status');
            $table->longText('remarks')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transactions', function (Blueprint $table) {
                        $table->dropColumn(['bank_id',  'account_number','fullname','from_currency','to_currency','exchange_rate','fee','status']);

        });
    }
}
