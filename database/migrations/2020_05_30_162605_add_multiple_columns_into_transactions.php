<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMultipleColumnsIntoTransactions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
              Schema::table('transactions', function (Blueprint $table) {
            $table->string('branch_name');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('address_line');
            $table->string('cityOrTown');
            $table->string('recipient_country');
            $table->string('mobile');
            $table->string('emailID');
            $table->longText('sending_reason');
        });   
         }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('transactions');
    }
}
