<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Source extends Model
{
    protected $fillable = [
        'url',
        'title',
        'description',
        'image',
        'type',
        'crawler_config_id',
        'language'
    ];

    public function crawlerConfig()
    {
        return $this->belongsTo(CrawlerConfig::class);
    }
}
