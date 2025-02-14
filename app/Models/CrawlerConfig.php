<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CrawlerConfig extends Model
{
    protected $fillable = [
        'name',
        'keywords',
        'schedule',
        'user_id',
    ];

    protected $casts = [
        'keywords' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
