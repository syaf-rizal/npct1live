<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobSeeker extends Model
{
    protected $table = 'tr_job_seeker';

    protected $fillable = [
        'seeker_job_id', 'seeker_full_name', 'seeker_email', 'seeker_phone', 'seeker_current_company', 'seeker_soc_media','seeker_soc_media_link', 'seeker_doc_cv', 'seeker_info'
    ];

    protected $hidden = [
        'created_at', 'updated_at'
    ];
}
