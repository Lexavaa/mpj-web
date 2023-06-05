<?php

namespace App\Http\Controllers;

use App\Models\{Crew,Profile};
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class TeamController extends Controller
{
    public function Team()
    {
        return view('admin.components.pages.team', [
            'profile' => Profile::all(),
            'crew' => Crew::with('user')->get(),
        ]);
    }

    public function TeamId($id)
    {
        $output_id = Crew::where('nomor_id_kru', $id)->get();
        $domain = $_SERVER['HTTP_HOST'];

        return view('admin.components.pages.team-id', [
            'crew' => Crew::find($output_id),
            'qrCode' => QrCode::style('dot')->eye('circle')->color(88, 128, 77)->size(90)->generate($domain . '/dashboard/id-crew-check/' . $id)
        ]);
    }
}
