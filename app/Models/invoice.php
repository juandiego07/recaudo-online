<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class invoice extends Model
{
    use HasFactory;
    protected $table = 'invoices';
    protected $fillable = ['ref_pay', 'description', 'fee', 'due', 'credit_value', 'type_id', 'id_cliente', 'names', 'phone', 'email'];
    protected $hidden = array('created_at', 'updated_at');
}
