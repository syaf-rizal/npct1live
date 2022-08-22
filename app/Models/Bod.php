<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Bod extends Model
{
    protected $table = 'tr_bod';

    protected $fillable = [
        'slug', 'name', 'title', 'description', 'bod_position', 'photo','dimension', 'is_active'
    ];

    protected $hidden = [
        'created_at', 'updated_at'
    ];

    public static function boot()
    {
        parent::boot();
        static::saving(function($model){
            try 
            {
                $model->slug = str_slug($model->name);
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

}
