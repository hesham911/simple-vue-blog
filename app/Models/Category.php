<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'title',
        'icon',
        'parent_id'
    ];

    protected array $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];


    public function blogs(): HasMany
    {
        return $this->hasMany(Blog::class,'category_id');
    }

    public function child(): HasMany
    {
        return $this->hasMany(Category::class,'parent_id','id');
    }
}
