<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Confirmation extends Model
{
    use HasFactory;
    protected $table = 'confirmation';
    protected $fillable = ['x_cust_id_cliente', 'x_ref_payco', 'x_id_factura', 'x_id_invoice', 'x_description', 'x_amount', 'x_amount_country', 'x_amount_ok', 'x_tax', 'x_amount_base', 'x_currency_code', 
                           'x_bank_name', 'x_cardnumber', 'x_quotas', 'x_respuesta', 'x_response', 'x_approval_code', 'x_transaction_id', 'x_fecha_transaccion',
                           'x_transaction_date', 'x_cod_respuesta', 'x_cod_response', 'x_response_reason_text', 'x_errorcode', 'x_cod_transaction_state', 'x_transaction_state', 'x_franchise', 'x_business', 'x_customer_doctype',
                           'x_customer_document', 'x_customer_name', 'x_customer_lastname', 'x_customer_email', 'x_customer_phone', 'x_customer_movil', 'x_customer_ind_pais', 'x_customer_country', 'x_customer_city','x_customer_address',
                           'x_customer_ip', 'x_signature', 'x_test_request', 'x_extra1', 'x_extra2', 'x_extra3', 'x_extra4', 'x_extra5', 'x_extra6', 'x_extra7', 'x_extra8', 'x_extra9', 'x_extra10'];
    protected $hidden = array('created_at', 'updated_at');
}
