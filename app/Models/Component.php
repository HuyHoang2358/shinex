<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Component extends Model
{
    protected $table = 'components';
    protected $fillable = ['title', 'slug', 'description', 'image', 'product_id'];
}
