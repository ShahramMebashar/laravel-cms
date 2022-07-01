<?php
namespace Domain\Posts\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = [
        'title',
        'slug',
        'exerpt',
        'content',
    ];
}