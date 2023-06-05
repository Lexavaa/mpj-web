<?php

namespace App\Http\Controllers;

use App\Models\{Crew, User,Profile};
use Illuminate\Http\Request;

class UserAccountController extends Controller
{
    public function index(){
        return view('admin.components.pages.accountinfo',[
            'user' => User::where('online_status', true)->get(), 
            'profile' => Profile::all(), 
            'crew' => Crew::take(3)->get(), 
        ]);
    }
}
