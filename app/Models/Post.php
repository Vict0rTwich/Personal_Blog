<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory, softDelete;
    
    protected $fillable = [
    'category_id',
    'admin_id',
    'title',
    'description',
    'post_body',
    'slug',
    ];
    
}
