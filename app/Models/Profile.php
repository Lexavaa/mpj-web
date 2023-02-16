<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $table ='profiles';
    protected $guarded=['id'];

    public function user(){
        return $this->belongsTo(User::class,'users_id');
    }

    public function regional(){
        return $this->belongsTo(Regional::class,'regionals_id');
    }
}
