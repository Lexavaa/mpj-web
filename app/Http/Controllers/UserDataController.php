<?php

namespace App\Http\Controllers;

use App\Models\{User,Profile,Regional};
use Illuminate\Http\Request;

class UserDataController extends Controller
{
    public function index()
    {
        return view('landing.joinus', [
            'regional'  => Regional::latest()->get()
        ]);
    }

    public function uploadData(Request $request)
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
        $dataProfile->status_bayar = 0;
        $dataProfile->jumlah_kru = $data['jumlah_kru'];
        $dataProfile->nama_pendaftar = $data['nama_pendaftar'];
        $dataProfile->jabatan_pendaftar = $data['jabatan_pendaftar'];
        $dataProfile->nomor_wa = $data['nomor_wa'];
        $dataProfile->save();

        // IF SUCCESS //
        return redirect()->back()->with('success', 'Data Anda Sedang Kami Proses!');
    }

    public function uploadFullData(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama_media' => 'required|unique:profiles',
            'instagram' => 'required|unique:profiles',
            'tiktok' => 'required|unique:profiles',
            'youtube' => 'required|unique:profiles',
            'facebook' => 'required|unique:profiles',
            'twitter' => 'required|unique:profiles',
            'website' => 'required|unique:profiles',
            'link_map' => 'required|unique:profiles',
            'logo_ponpes' => 'required|image|file|mimes:jpeg,jpg,png|max:1024',
            'logo_media' => 'required|image|file|mimes:jpeg,jpg,png|max:1024',
            'foto_gedung' => 'required|image|file|mimes:jpeg,jpg,png|max:2048',
            'foto_pengasuh' => 'required|image|file|mimes:jpeg,jpg,png|max:2048',
            'foto_kegiatan' => 'required|image|file|mimes:jpeg,jpg,png|max:2048',
            'sejarah_pesantren' => 'required|min:100',
            'program_pesantren' => 'required|min:20',
            'quote_pengasuh' => 'required',
            'jumlah_santri' => 'required|numeric',
        ]);

        $validatedData['status_bayar'] = 0;

        if ($request->file('logo_ponpes')) {
            $validatedData['logo_ponpes'] = $request->file('logo_ponpes')->store('logo-pesantren');
        }

        if ($request->file('logo_media')) {
            $validatedData['logo_media'] = $request->file('logo_media')->store('logo-media');
        }

        if ($request->file('foto_gedung')) {
            $validatedData['foto_gedung'] = $request->file('foto_gedung')->store('foto-gedung');
        }

        if ($request->file('foto_pengasuh')) {
            $validatedData['foto_pengasuh'] = $request->file('foto_pengasuh')->store('foto-pengasuh');
        }

        if ($request->file('foto_kegiatan')) {
            $validatedData['foto_kegiatan'] = $request->file('foto_kegiatan')->store('foto-kegiatan');
        }

        // dd($request);
        Profile::where('users_id', $id)
            ->update($validatedData);

        return redirect()->back()->with('success', 'Data Anda Sedang Kami Proses!');
    }

    public function updateData(Request $request,$id_user,$id_profile)
    {
        $data = $request->validate([
            'email' => 'required|email',
            // 'password' => 'required|min:8',
            'jumlah_kru' => 'required|numeric',
            'nama_pendaftar' => 'required',
            'jabatan_pendaftar' => 'required',
            'nomor_wa' => 'required|numeric|min:12',
        ]);

        $data = $request->all();
        $dataUser = User::find($id_user);
        $dataUser->email = $data['email'];
        $dataUser->update();

        $dataProfile = Profile::find($id_profile);
        $dataProfile->jumlah_kru = $data['jumlah_kru'];
        $dataProfile->nama_pendaftar = $data['nama_pendaftar'];
        $dataProfile->jabatan_pendaftar = $data['jabatan_pendaftar'];
        $dataProfile->nomor_wa = $data['nomor_wa'];
        $dataProfile->update();

        // IF SUCCESS //
        return redirect()->back()->with('success', 'Data Anda Sedang Kami Proses!');
    }
}
