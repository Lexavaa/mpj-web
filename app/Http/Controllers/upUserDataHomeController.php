<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Regional;
use App\Models\User;
use Illuminate\Http\Request;

class upUserDataHomeController extends Controller
{
    public function index()
    {
        return view('user.page.join-us', [
            'regional'  => Regional::latest()->get()
        ]);
    }

    public function store(Request $request)
    {

        $data = $request->validate([
            'nama_pesantren' => 'required|unique:profiles',
            'nama_pengasuh' => 'required',
            'alamat_lengkap' => 'required',
            'regionals_id' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'khodims_id' => 'nullable',
            'jumlah_kru' => 'required|numeric',
            'nama_pendaftar' => 'required',
            'jabatan_pendaftar' => 'required',
            'nomor_wa' => 'required|numeric|min:12|unique:profiles',
        ]);

        $data = $request->all();
        $dataUser = new User;
        $dataUser->email = $data['email'];
        $dataUser->khodims_id = 1;
        $dataUser->password = bcrypt($data['password']);
        $dataUser->save();

        $dataProfile = new Profile;
        $dataProfile->nama_pesantren = $data['nama_pesantren'];
        $dataProfile->nama_pengasuh = $data['nama_pengasuh'];
        $dataProfile->alamat_lengkap = $data['alamat_lengkap'];
        $dataProfile->regionals_id = $data['regionals_id'];
        $dataProfile->users_id = $dataUser->id;
        $dataProfile->jumlah_kru = $data['jumlah_kru'];
        $dataProfile->nama_pendaftar = $data['nama_pendaftar'];
        $dataProfile->jabatan_pendaftar = $data['jabatan_pendaftar'];
        $dataProfile->nomor_wa = $data['nomor_wa'];
        $dataProfile->save();

        // IF SUCCESS //
        return redirect()->back()->with('success', 'Data Anda Sedang Kami Proses!');
    }
}
