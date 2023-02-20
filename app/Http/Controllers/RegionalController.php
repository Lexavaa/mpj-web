<?php

namespace App\Http\Controllers;

use App\Models\{Profile,Regional, User};
use Illuminate\Http\Request;

class RegionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.page.regional', [
            'title' => 'Regional',
            'notif' => User::where('isActive', 0)->count(),
            'profile' => Profile::where('users_id', auth()->user()->id)->with('regional')->get(),
            'regional' => Regional::latest()->get()
        ]);
    }

    public function store(Request $request)
    {
        Regional::create($request->except(['_token','submit']));
        return redirect()->back()->with('success','Regional Berhasil Ditambah !');
    }

    public function update(Request $request,$id)
    {
        $regional = Regional::find($id);
        $regional->update($request->except(['_token','submit']));

        return redirect()->back()->with('success','Regional Ini Telah Di Update !');
    }

    public function destroy($id)
    {
        $regional = Regional::find($id);

        $regional->delete();
        return redirect()->back()->with('success','Regional Telah Di Hapus !');
    }
}
