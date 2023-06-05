<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Support\Facades\DB;

class ChartApiController extends Controller
{
    public function pick()
    {
        $data_jumlah_kru = Profile::select(DB::raw("CAST(SUM(jumlah_kru) as int) as data_jumlah_kru"))
            ->GroupBy(DB::raw("Month(created_at)"))
            ->pluck('data_jumlah_kru');

        $month = Profile::select(DB::raw("MONTHNAME(created_at) as month"))
            ->GroupBy(DB::raw("MONTHNAME(created_at)"))
            ->pluck('month');

        return response()->json([
            'data' => $data_jumlah_kru,
            'labels' => $month,
        ]);
    }
}
