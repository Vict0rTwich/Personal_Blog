<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Categorie extends Model
{
    use HasFactory, softDeletes;

    protected $fillable = [
        'category',
    ];

    public function post(): HasMany {
        return $this->hasMany(posts::class, 'post_id');
    }
}

