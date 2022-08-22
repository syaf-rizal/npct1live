<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobCategory extends Model
{
    protected $table = 'tr_job_category';

    protected $fillable = [
        'category_value', 'category_name', 'category_active', 'create_by'
    ];

    protected $hidden = [
        'created_at', 'updated_at'
    ];
}
