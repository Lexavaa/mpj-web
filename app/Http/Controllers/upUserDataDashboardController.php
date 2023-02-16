<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class upUserDataDashboardController extends Controller
{
    public function setor(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama_media' => 'required|unique:profiles',
            'nomor_telegram' => 'required|unique:profiles|numeric',
            'instagram' => 'required|unique:profiles',
            'tiktok' => 'required|unique:profiles',
            'youtube' => 'required|unique:profiles',
            'facebook' => 'required|unique:profiles',
            'twitter' => 'required|unique:profiles',
            'website' => 'required|unique:profiles',
            'link_tiktok' => 'required|unique:profiles',
            'link_youtube' => 'required|unique:profiles',
            'link_instagram' => 'required|unique:profiles',
            'link_facebook' => 'required|unique:profiles',
            'link_twitter' => 'required|unique:profiles',
            'link_website' => 'required|unique:profiles',
            'link_map' => 'required|unique:profiles',
            'logo_ponpes' => 'required|image|file|mimes:jpeg,jpg,png|max:1024',
            'logo_media' => 'required|image|file|mimes:jpeg,jpg,png|max:1024',
            'foto_gedung' => 'required|image|file|mimes:jpeg,jpg,png|max:2048',
            'foto_pengasuh' => 'required|image|file|mimes:jpeg,jpg,png|max:2048',
            'foto_kegiatan' => 'required|image|file|mimes:jpeg,jpg,png|max:2048',
            'sejarah_pesantren' => 'required|min:200|max:500',
            'quote_pengasuh' => 'required',
            'link_audio_dawuh' => 'required',
            'jumlah_santri' => 'required|numeric',
        ]);

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
}
