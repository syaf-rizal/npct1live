<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TenderDocument extends Model
{
    protected $table = 'tr_tender_doc';

    protected $fillable = [
        'doc_tender_id', 'doc_tax_id', 'doc_siup', 'doc_company_profile', 'doc_deed_establish', 'doc_deed_change', 'doc_deed_changes'
    ];

    protected $hidden = [
        'created_at', 'updated_at'
    ];

}
