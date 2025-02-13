<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{

    const STATUS_PENDING = 'pending';
    const STATUS_PROCESSING = 'processing';
    const STATUS_CRAWLED = 'crawled';
    const STATUS_FAILED = 'failed';

    protected $fillable = [
        'url',
        'domain',
        'publication_time',
        'language',
        'status'
    ];
}
