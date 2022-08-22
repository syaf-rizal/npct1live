<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model
{
    protected $table = 'tr_post_category';

    protected $fillable = [
        'post_id', 'category_id', 'created_by'
    ];

    protected $hidden = [
        'created_at', 'updated_at'
    ];
}
