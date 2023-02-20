<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SomePageController extends Controller
{
    public function FailedSession()
    {
        return view('admin.page.failedacces',[
            'title' => 'AKSES DITUTUP!'
        ]);
    }

    public function FailedAccount()
    {
        return view('admin.page.failedaccount',[
            'title' => 'AKUN BELUM DI FERIVIKASI!'
        ]);
    }
}
