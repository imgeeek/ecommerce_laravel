<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductController;
class Cart extends Model
{
    use HasFactory;
    public $table='cart';
}
