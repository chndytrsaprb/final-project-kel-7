<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

<<<<<<< HEAD
class profile extends Model
{
    use HasFactory;
    protected $table = "profile";

    protected $fillable = ['user_id','phone_number','addres'];
}
=======
class Profile extends Model
{
    use HasFactory;
    protected $table = "profile";
    protected $fillable = ["phone_number", "address", "user"];
}
>>>>>>> 67a187406121fb2f1b0d5adf3b3f9c2099ed136e
