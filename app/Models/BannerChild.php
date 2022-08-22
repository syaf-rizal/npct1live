<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BannerChild extends Model
{
    protected $primaryKey = 'child_id';
    protected $table = 'tr_banner_child';

    protected $fillable = [
        'child_parent_id', 'child_desc', 'child_src', 'child_dimension', 'child_linked', 'child_active'
    ];

    protected $hidden = [
        'created_at', 'updated_at'
    ];

}
