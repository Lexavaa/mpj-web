<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class NotifyListController extends Controller
{
    public function index()
    {
        return view('admin.page.notify',[
            'title' => 'Notifikasi',
            'profile' => Profile::latest()->with(['user', 'regional'])->get(),
            'profile_check' => Profile::where('users_id', auth()->user()->id)->with('regional')->get(),
        ]);
    }
}
