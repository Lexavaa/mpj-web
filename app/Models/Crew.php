<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crew extends Model
{
    use HasFactory;
    protected $table ='crews';
    protected $guarded=['id'];

    public function user(){
        return  $this->belongsTo(User::class,'users_id');
    }

    public function profile(){
        return  $this->belongsTo(Profile::class,'profiles_id');
    }
}
