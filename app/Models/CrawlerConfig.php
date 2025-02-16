<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CrawlerConfig extends Model
{

    const STATUS_PENDING = 'pending';
    const STATUS_PROCESSING = 'processing';
    const STATUS_CRAWLED = 'crawled';
    const STATUS_FAILED = 'failed';

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

    public function sources()
    {
        return $this->hasMany(Source::class);
    }
}
