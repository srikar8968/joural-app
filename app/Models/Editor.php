<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Editor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'avatar',
        'slug',
        'info',
        'description',
        'role',
        'category_id',
        'meta_id',
        'status',
    ];

    public function category() {
        return $this->belongsTo('App\Models\Category');
    }
    public function meta() {
        return $this->belongsTo('App\Models\Meta');
    }
}
