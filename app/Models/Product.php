<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['vendor_id', 'branch_manager_id', 'name', 'description', 'price', 'count', 'img'];
}
