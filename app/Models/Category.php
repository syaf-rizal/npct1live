<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'tr_category';

    protected $fillable = [
        'category_name', 'category_description', 'create_by'
    ];

    protected $hidden = [
        'created_at', 'updated_at'
    ];

}
