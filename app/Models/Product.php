<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static orderBy(string $string, string $string1)
 * @method static count()
 */
class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['name', 'images', 'slug', 'description', 'content'];
}
