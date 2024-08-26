<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Benefit extends Model
{
    protected $table = 'benefits';
    protected $fillable = ['title', 'description', 'image', 'product_id'];

}
