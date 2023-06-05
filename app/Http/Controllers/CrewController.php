<?php

namespace App\Http\Controllers;

use App\Models\{User,Crew, Profile, Regional};
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CrewController extends Controller
{
    public function index()
    {
        return view('admin.components.pages.crew', [
            'title' => 'Crew',
            'crew_log' => Crew::orderBy('id', 'desc')->first(),
            'notif' => User::where('isActive', 0)->count(),
            'profile' => Profile::where('users_id', auth()->user()->id)->with(['user', 'regional'])->get(),
            'crew' => Crew::where('users_id', auth()->user()->id)->latest()->with('user')->get(),
            'regional' => Regional::latest()->get(),
        ]);
    }

    public function upload(Request $request)
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
            'regional_type' => 'required',
            'join_type' => 'required',
        ]);

        $validatedData['profiles_id'] = auth()->user()->id;
        $validatedData['users_id'] = auth()->user()->id;

        //make over some ID TANGGAL MASUK TAHUN
        $year = Carbon::now()->format('y');

        //make over some ID REGIONAL
        $regional_case = $validatedData['regional_type'];
        $id_regional = str_pad($regional_case, 2, '0', STR_PAD_LEFT);

        //make over some ID NOMOR URUT GABUNG REG.p';'o;o900p7IONAL
        $join_case = $validatedData['join_type'];
        $id_join = str_pad($join_case, 3, '0', STR_PAD_LEFT);


        //make over some ID NOMOR URUT KODE ANGGOTA KRU
        //NGITUNG ADA APA GAK KRU--PESANTRENNYA
        $existingCrewCount = Crew::where('users_id', auth()->user()->id)->count();

        //DAH GAUSAH DIPIKIR PUSING
        if ($existingCrewCount > 0) {
            $lastCrew = Crew::where('users_id', auth()->user()->id)->orderBy('id', 'desc')->first();
            $crew_case = $lastCrew->number + 1;
        } else {
            $crew_case = 1;
        }

        //ID JADI
        $id_crew = str_pad($crew_case, 2, '0', STR_PAD_LEFT);


        //MIX MATCH DATA
        $validatedData['nomor_id_kru'] = ($year) . ($id_regional) . ($id_join) . ($id_crew);

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
            'nomor_wa_kru' => 'required|numeric|min:12',
            'email_kru' => 'required|email',
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

        return redirect()->back()->with('success', 'Data Kru ' . $crew->nama_kru . ' Berhasil Di Update !');
    }

    public function delete($id)
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
