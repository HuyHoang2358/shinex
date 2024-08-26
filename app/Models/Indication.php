<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Indication extends Model
{
    protected $table = 'indications';
    protected $fillable = ['title', 'description', 'image', 'product_id'];

}
