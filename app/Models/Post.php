<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Support\Str;

class Post extends Model
{
    protected $table = 'tr_post';

    protected $fillable = [
        'user_id', 'user_group', 'slug', 'title', 'subtitle', 'short_description', 'post_body', 'post_type', 'thumb_file', 'post_expired', 'thumb_dimension', 'posted_at', 'is_published'
    ];

    protected $hidden = [
        'created_at', 'updated_at'
    ];

    public function hasOwner()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id')->select(['id', 'name']);
    }

    public static function boot()
    {
        parent::boot();
        static::saving(function($model){
            try 
            {
                $model->slug = str_slug($model->title) . '-' . Carbon::now()->timestamp;
            } catch (Exception $e)
            {
                abort(500, $e->getMessage());
            }
        });
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getPostedAtAttribute($date)
    {
        // return $this->attributes['posted_at'] = Carbon::parse($date)->diffForHumans();
        return $this->attributes['posted_at'] = Carbon::parse($date)->isoFormat('MMMM, Do YYYY');
    }
}
