<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class invoice extends Model
{
    use HasFactory;
    protected $table = 'invoices';
    protected $fillable = ['id_invoice', 'description', 'amount','id_cliente', 'names', 'phone', 'total_due', 'init_amount'];
    protected $hidden = array('created_at', 'updated_at');
}
