<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

class Tender extends Model
{
    public $incrementing = false;
    protected $primaryKey = 'tender_id';
    protected $table = 'tr_tender';

    protected $fillable = [
        'tender_id', 'tender_number', 'tender_slug', 'tender_name', 'tender_company', 'tender_pic', 'tender_email', 'tender_phone'
    ];

    protected $hidden = [
        'created_at', 'updated_at'
    ];

    protected static function boot()
	{
		parent::boot();
		static::creating(function ($model) {
			try {
				$model->tender_id = Uuid::uuid4()->toString();
			} catch (UnsatisfiedDependencyException $e) {
				abort(500, $e->getMessage());
			}
		});
    }
}
