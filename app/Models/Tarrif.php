<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tarrif extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'tr_tender';

    protected $fillable = [
        'category', 'category_description', 'tender_slug', 'type', 'type_desc', 'cont_type', 'tarrif', 'remark'
    ];

    protected $hidden = [
        'created_at', 'updated_at'
    ];
}
