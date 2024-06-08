<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caritem extends Model
{
    use HasFactory;
    protected $table = "caritem";
    protected $fillable = ["cart", "product", "quantity"];
}