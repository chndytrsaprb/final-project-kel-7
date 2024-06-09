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
>>>>>>> 71daa77cbf1ba9fe70c9c2f8038ab9b020604754
class Profile extends Model
{
    use HasFactory;
    protected $table = "profile";
    protected $fillable = ["phone_number", "address", "user"];
}
<<<<<<< HEAD

=======
>>>>>>> 71daa77cbf1ba9fe70c9c2f8038ab9b020604754
