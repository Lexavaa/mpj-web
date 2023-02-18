<?php

namespace App\Http\Controllers;

use App\Models\{Profile, Crew, Regional};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CrewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.page.crew', [
            'title' => 'Crew',
            'notif' => Profile::where('jumlah_santri', null)->orWhere('nama_media', null)->count(),
            'profile' => Profile::where('users_id', auth()->user()->id)->with(['user', 'regional'])->get(),
            'crew' => Crew::where('users_id', auth()->user()->id)->latest()->with('users')->get(),
            'regional' => Regional::latest()->get(),
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_kru' => 'required',
            'foto_kru' => 'required|image|file|max:1000',
            'alamat_kru' => 'required',
            'nomor_wa_kru' => 'required|numeric|min:12|unique:crews',
            'email_kru' => 'required|email|unique:crews',
            'jabatan_kru' => 'required',
            'keahlian_kru' => 'required',
            'status_kru' => 'required',
        ]);

        $validatedData['users_id'] = auth()->user()->id;

        if ($request->file('foto_kru')) {
            $validatedData['foto_kru'] = $request->file('foto_kru')->store('crew-images');
        }

        Crew::create($validatedData);
        return redirect()->back()->with('success', 'Kru Berhasil Ditambahkan!');
    }

    public function update(Request $request, $id)
    {
        $crew = Crew::find($id);
        $validatedData = $request->validate([
            'nama_kru' => 'required',
            'foto_kru' => 'required|image|file|max:1000',
            'alamat_kru' => 'required',
            'nomor_wa_kru' => 'required|numeric|min:12|unique:crews',
            'email_kru' => 'required|email|unique:crews',
            'jabatan_kru' => 'required',
            'keahlian_kru' => 'required',
            'status_kru' => 'required',
        ]);

        $validatedData['users_id'] = auth()->user()->id;
    
        if ($request->file('foto_kru')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['foto_kru'] = $request->file('foto_kru')->store('crew-images');
        }

        Crew::where('id', $crew->id)
            ->update($validatedData);

        return redirect()->back()->with('success','Data Kru ' . $crew->nama_kru . ' Berhasil Di Update !');
    }

    public function destroy($id)
    {
        $crew = Crew::find($id);

        if ($crew->foto_kru !== null) {
            Storage::delete($crew->foto_kru);
            $crew->delete();
        } else {
            $crew->delete();
        }

        return redirect()->back()->with('success', 'Data Kru ' . $crew->nama_kru . ' Berhasil Di Hapus !');
    }
}
