<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Segment extends Model
{
    protected $table = 'tr_uri_segment';

    protected $fillable = [
        'uri_slug', 'handle_controller', 'handle_action', 'handle_dynamic', 'handle_status'
    ];

    protected $hidden = [
        'created_at', 'updated_at'
    ];

}
