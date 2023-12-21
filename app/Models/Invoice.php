<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'total',
        'customer_id',
        'sub_total',
        'date',
        'due_date',
        'reference',
        'terms_and_conditions',
        'discount',
        'number'
    ];

    public function customer() {
        return $this->belongsTo(Customer::class);
    }

    public function invoice_items(){
        return $this->hasMany(InvoiceItem::class);
    }
}
