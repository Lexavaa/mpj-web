<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Regional extends Model
{
    use HasFactory;
    protected $table ='regionals';
    protected $guarded=['id'];

}