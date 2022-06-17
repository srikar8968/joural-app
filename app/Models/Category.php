<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'meta_id',
    ];

    public function journals() {
        return $this->hasMany('App\Models\Journal');
    }

    public function editors() {
        return $this->hasMany('App\Models\Editor');
    }

    public function meta() {
        return $this->belongsTo('App\Models\Meta');
    }
}
