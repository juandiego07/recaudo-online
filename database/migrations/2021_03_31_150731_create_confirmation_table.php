<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfirmationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('confirmation', function (Blueprint $table) {
            $table->id();
            $table->integer('x_cust_id_cliente');
            $table->integer('x_ref_payco');
            $table->string('x_id_factura',100);
            $table->string('x_id_invoice',100);
            $table->string('x_description',100)->nullable();
            $table->float('x_amount');
            $table->float('x_amount_country');
            $table->float('x_amount_ok');
            $table->float('x_tax');
            $table->float('x_amount_base');
            $table->string('x_currency_code',50)->nullable();
            $table->string('x_bank_name',50)->nullable();
            $table->string('x_cardnumber',50)->nullable();
            $table->integer('x_quotas');
            $table->string('x_respuesta',50)->nullable();
            $table->string('x_response',50)->nullable();
            $table->string('x_approval_code',50)->nullable();
            $table->string('x_transaction_id',50)->nullable();
            $table->string('x_fecha_transaccion',50)->nullable();
            $table->string('x_transaction_date',50)->nullable();
            $table->integer('x_cod_respuesta');
            $table->integer('x_cod_response');
            $table->string('x_response_reason_text',50)->nullable();
            $table->string('x_errorcode',50)->nullable();
            $table->integer('x_cod_transaction_state');
            $table->string('x_transaction_state',50)->nullable();
            $table->string('x_franchise',50)->nullable();
            $table->string('x_business',50)->nullable();
            $table->string('x_customer_doctype',50)->nullable();
            $table->string('x_customer_document',50)->nullable();
            $table->string('x_customer_name',50)->nullable();
            $table->string('x_customer_lastname',50)->nullable();
            $table->string('x_customer_email',50)->nullable();
            $table->string('x_customer_phone',50)->nullable();
            $table->string('x_customer_movil',50)->nullable();
            $table->string('x_customer_ind_pais',50)->nullable();
            $table->string('x_customer_country',50)->nullable();
            $table->string('x_customer_city',50)->nullable();
            $table->string('x_customer_address',50)->nullable();
            $table->string('x_customer_ip',50)->nullable();
            $table->string('x_signature')->nullable();
            $table->string('x_test_request',50)->nullable();
            $table->string('x_extra1',50)->nullable();
            $table->string('x_extra2',50)->nullable();
            $table->string('x_extra3',50)->nullable();
            $table->string('x_extra4',50)->nullable();
            $table->string('x_extra5',50)->nullable();
            $table->string('x_extra6',50)->nullable();
            $table->string('x_extra7',50)->nullable();
            $table->string('x_extra8',50)->nullable();
            $table->string('x_extra9',50)->nullable();
            $table->string('x_extra10',50)->nullable();
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
        Schema::dropIfExists('confirmation');
    }
}
