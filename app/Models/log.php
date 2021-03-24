<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class log extends Model
{
    use HasFactory;
    protected $table = 'logs';
    protected $fillable = array('x_ref_payco', 'x_id_invoice', 'x_description', 'x_amount_ok', 'x_currency_code', 'x_bank_name', 'x_transaction_date', 'x_response', 'x_response_reason_text', 'x_errorcode', 'x_customer_ip');
    protected $hidden = array('created_at', 'updated_at');
}
