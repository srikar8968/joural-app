<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
    use HasFactory;

    protected $fillable = [
        'sku',
        'title',
        'url',
        'info',
        'impact_factor',
        'citations_report_url',
        'category_id',
        'user_id',
        'meta_id',
        'status',
    ];

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
    public function category() {
        return $this->belongsTo('App\Models\Category');
    }
    public function meta() {
        return $this->belongsTo('App\Models\Meta');
    }

    public function isActive() {
        if ($this->status == 1 || $this->status == '1') {
            return true;
        }
        return false;
    }
}
