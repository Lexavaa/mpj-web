<?php

namespace App\Http\Controllers;

use App\Models\{Image, Profile, Regional, User};

class DataController extends Controller
{
    public function userData()
    {
        $image = Image::orderByDesc('id')->first();
        return view('admin.components.pages.userdata', [
            'profiles' => Profile::latest()->with(['user', 'regional'])->get(),
            'user' => User::latest()->get(),
            'image' => $image,
            'profile' => Profile::where('users_id', auth()->user()->id)->with('regional')->get(),
            'regional'  => Regional::latest()->get()
        ]);
    }

    public function dataProfile()
    {
        return view('admin.components.pages.dataprofile', [
            'profiles' => Profile::latest()->with(['user', 'regional'])->get(),
            'profile' => Profile::where('users_id', auth()->user()->id)->with('regional')->get(),
            'regional'  => Regional::latest()->get()
        ]);
    }
}
