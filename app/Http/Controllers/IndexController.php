<?php

namespace App\Http\Controllers;

use App\Models\{User,Regional};

class IndexController extends Controller
{
    public function index(){
        return view('user.page.index',[
            'desc' => "MEDIA PONDOK JATIM🗣️",
            'regional' => Regional::latest()->get(),
            'user' => User::latest()->get(),
        ]);
    }
    
}
