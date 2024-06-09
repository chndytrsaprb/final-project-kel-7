<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class profile extends Model
{
    use HasFactory;
    protected $table = "profile";

    protected $fillable = ['user_id','phone_number','addres'];
}

class Profile extends Model
{
    use HasFactory;
    protected $table = "profile";
    protected $fillable = ["phone_number", "address", "user"];
}

