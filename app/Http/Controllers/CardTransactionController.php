<?php

namespace App\Http\Controllers;

use App\Models\{Profile, User};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CardTransactionController extends Controller
{
    public function Transaction()
    {
        return view('admin.components.pages.transaction', [
            'title' => 'Bayar Iuran?',
            'online' => User::where('online_status',true)->count(),
            'notif' => User::where('isActive', 0)->count(),
            'profile' => Profile::where('users_id', auth()->user()->id)->with('regional')->get(),
            'profiles' => Profile::all(),
        ]);
    }

    public function TransactionInfo()
    {
        return view('admin.components.pages.transaction-info', [
            'title' => 'Bayar Iuran?',
            'notif' => User::where('isActive', 0)->count(),
            'profile' => Profile::where('users_id', auth()->user()->id)->with('regional')->get(),
            'profiles' => Profile::all(),
        ]);
    }

    public function Pay(Request $request, $id)
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

    public function Rejected($id)
    {
        $user = Profile::find($id);

        Storage::delete($user->bukti_tf);
        $validatedData['bukti_tf'] = 'bukti-transfer/default.jpg';

        Profile::where('id', $id)
            ->update($validatedData);

        return redirect()->back()->with('success', 'Data Terganti!');
    }

    public function Accepted($id)
    {
        $validatedData['status_bayar'] = 1;

        Profile::where('id', $id)
            ->update($validatedData);

        return redirect()->back()->with('success', 'User Dikonfirmasi');
    }
}
