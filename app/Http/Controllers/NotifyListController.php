<?php

namespace App\Http\Controllers;

use App\Models\{Profile, User};
use Illuminate\Http\Request;

class NotifyListController extends Controller
{
    public function index()
    {
        return view('admin.page.notify', [
            'title' => 'Notifikasi',
            'notif' => User::where('isActive', 0)->count(),
            'profiles' => Profile::latest()->with(['user', 'regional'])->get(),
            'profile' => Profile::where('users_id', auth()->user()->id)->with('regional')->get(),
        ]);
    }

    public function ferivied($id)
    {
        $user = User::find($id);

        $validatedData['isActive'] = '1';

        User::where('id', $id)
            ->update($validatedData);

        return redirect()->back()->with('success', 'Email Dari ' . $user->email . ' Has Ferivied');
    }
}
