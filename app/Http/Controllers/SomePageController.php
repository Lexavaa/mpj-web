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
}
