<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property mixed $childs
 */
class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['name', 'slug', 'icon', 'parent_id', 'description'];

    public static function boot(): void
    {
        // Trước khi xóa 1 category sẽ xóa các category con
        parent::boot();
        static::deleting(function($category){
            $category->deleteChildren();
            $category->posts()->delete();
        });
    }

    public function childs():HasMany{
        return $this->hasMany(Category::class, "parent_id",'id');
    }

    public function parent(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'parent_id', 'id');
    }


    public function deleteChildren(): void
    {
        foreach ($this->childs as $child){
            $child->deleteChildren();
            $child->delete();
        }
    }

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class, 'category_id','id')->orderBy('updated_at', 'DESC');
    }
}
