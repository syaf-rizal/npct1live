<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

class Banner extends Model
{
    protected $primaryKey = 'banner_id';
    protected $table = 'tr_banner';

    protected $fillable = [
        'banner_uuid', 'banner_desc', 'banner_src', 'banner_title', 'banner_sub_title', 'banner_filename', 'banner_dimension', 'banner_active', 'banner_pinned', 'create_by'
    ];

    protected $hidden = [
        'created_at', 'updated_at'
    ];

    public function hasBanner()
    {
        return $this->hasMany('App\Models\BannerChild', 'child_parent_id', 'banner_id')->select(['child_parent_id', 'child_desc', 'child_src', 'child_linked']);
    }

    protected static function boot()
	{
		parent::boot();
		static::creating(function ($model) {
			try {
				$model->banner_uuid = Uuid::uuid4()->toString();
			} catch (UnsatisfiedDependencyException $e) {
				abort(500, $e->getMessage());
			}
		});
    }
}
