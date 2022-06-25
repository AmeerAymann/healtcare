<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Inovice extends Model
{

    use SoftDeletes;

    protected $fillable = [
        'invoice_number',
        'invoice_Date',
        'Due_date',
        'product',
        'section_id',
        'Amount_collection',
        'Amount_Commission',
        'Discount',
        'Value_VAT',
        'Rate_VAT',
        'Total',
        'Status',
        'Value_Status',
        'note',
        'Payment_Date',
    ];

    protected $dates = ['deleted_at'];

    public function section(){
        return $this->belongsTo(Section::class);
    }

    public function details(){
        return $this->hasMany(InvoiceDetail::class );
    }

    public function attachment(){
        return $this->hasMany(InvoiceAttachment::class );
    }
}
