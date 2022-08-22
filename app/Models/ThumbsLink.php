<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ThumbsLink extends Model
{
    protected $table = 'tr_thumbs_linked';

    protected $fillable = [
        'thumbs_title', 'thumbs_short', 'thumbs_src', 'thumbs_dimension', 'thumbs_linked', 'thumbs_type', 'thumbs_pinned', 'create_by'
    ];

    protected $hidden = [
        'created_at', 'updated_at'
    ];

}
