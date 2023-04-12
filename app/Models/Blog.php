<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'blogs';

    protected $fillable = [
        'title',
        'user_id',
        'description',
        'slug',
        'visit',
        'status',
    ];

    protected array $dates =[
        'created_at',
        'updated_at',
        'publish_at',
        'deleted_at'
    ];
}
