<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

class Jobs extends Model
{
    protected $table = 'tr_job';

    protected $fillable = [
        'job_uuid', 'job_category', 'job_type', 'job_title', 'job_location', 'job_expired','job_description', 'job_placed', 'create_by'
    ];

    protected $hidden = [
        'created_at', 'updated_at'
    ];

    // public function getJobExpiredAttribute($date)
    // {
    //     return $this->attributes['job_expired'] = Carbon::parse($date)->isoFormat('MMMM, Do YYYY');
    // }

    public function hasCategory()
    {
        return $this->belongsTo('App\Models\JobCategory', 'job_category', 'category_value')->select(['category_value', 'category_name']);
    }

    public function getJobTypeAttribute($type)
    {
        return ($type == 'fullTime' ? ($this->attributes['job_type'] = 'Full Time, Permanent') : ($this->attributes['job_type'] = 'Contract'));
    }

    public function getJobLocationAttribute($location)
    {
        return ($location == 'IDJKT' ? ($this->attributes['job_location'] = 'Jakarta') : ($this->attributes['job_location'] = $location));
    }

    public static function boot()
    {
        parent::boot();
        static::saving(function($model){
            try 
            {
                $model->job_uuid = Uuid::uuid4()->toString();
            } catch (Exception $e)
            {
                abort(500, $e->getMessage());
            }
        });
    }
}
