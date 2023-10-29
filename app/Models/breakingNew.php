<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\softDeletes;

class breakingNew extends Model
{
    use HasFactory, softDeletes;

    protected $fillables = [
        'title', post_id,
    ];

    public function post(): BelongsTo {
        return $this->belongsTo(Post::class, 'psot_id', 'id');
    }
}
