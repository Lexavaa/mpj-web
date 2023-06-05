<?php

namespace App\Http\Controllers;

use App\Models\{User,Profile, Regional};
use Illuminate\Support\Facades\DB;

class DashboardHomeController extends Controller
{
    public function index()
    {
        return view('admin.components.pages.dashboard', [
            'regional' => Regional::latest()->get(),
            'user' => User::latest()->with('khodim')->get(),
            'profiles' => Profile::latest()->with(['user', 'regional'])->get(),
            'notif' => User::where('isActive', 0)->count(),
            'online' => User::where('online_status',true)->count(),
            'profile' => Profile::where('users_id', auth()->user()->id)->with('regional')->get(),
            'khodim' => User::where('khodims_id', 1)->orWhere('khodims_id', 2)->orWhere('khodims_id', 3)->orWhere('khodims_id', 4)->count()
        ]);
    }
}
