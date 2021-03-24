<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logs', function (Blueprint $table) {
            $table->id();
            $table->string('x_ref_payco');
            $table->string('x_id_invoice');
            $table->string('x_description');
            $table->string('x_amount_ok');
            $table->string('x_currency_code');
            $table->string('x_bank_name');
            $table->string('x_transaction_date');
            $table->string('x_response');
            $table->string('x_response_reason_text');
            $table->string('x_errorcode');
            $table->string('x_customer_ip');
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
        Schema::dropIfExists('logs');
    }
}
