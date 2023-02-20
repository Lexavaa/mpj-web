<?php

namespace App\Http\Controllers;

use App\Models\{User, Profile};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PaymentController extends Controller
{
    public function index()
    {
        return view('admin.page.pay-in', [
            'title' => 'Bayar Iuran?',
            'notif' => User::where('isActive', 0)->count(),
            'profile' => Profile::where('users_id', auth()->user()->id)->with('regional')->get(),
            'profiles' => Profile::all(),
        ]);
    }

    public function index_admin()
    {
        return view('admin.page.pay-out', [
            'title' => 'Bayar Iuran?',
            'notif' => User::where('isActive', 0)->count(),
            'profile' => Profile::where('users_id', auth()->user()->id)->with('regional')->get(),
            'profiles' => Profile::all(),
        ]);
    }

    public function store(Request $request, $id)
    {
        $validatedData = $request->validate([
            'bukti_tf' => 'required|image|file|mimes:jpeg,jpg,png|max:1024',
        ]);

        if ($request->file('bukti_tf')) {
            $validatedData['bukti_tf'] = $request->file('bukti_tf')->store('bukti-transfer');
        }

        Profile::where('id', $id)
            ->update($validatedData);

        return redirect()->back()->with('success', 'Hasil Dari Bukti Akan Kami Tindak Secepatnya');
    }

    public function failed(Request $request, $id)
    {
        $user = Profile::find($id);

        Storage::delete($user->bukti_tf);
        $validatedData['bukti_tf'] = 'bukti-transfer/default.jpg';

        Profile::where('id', $id)
            ->update($validatedData);

        return redirect()->back()->with('success', 'Data Terganti!');
    }
}
