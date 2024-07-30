<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends Model
{
    use HasFactory;

    public function jobs(): BelongsToMany
    {
        return $this->belongsToMany(Job::class, 'job_listing_tag', 'tag_id', 'job_listing_id');
    }
}
