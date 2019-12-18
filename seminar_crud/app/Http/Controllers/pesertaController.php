<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peserta;

class pesertaController extends Controller
{
    public function androidDetail()
    {
        return view('detail.d_android');
    }

    public function webDetail()
    {
        return view('detail.d_web');
    }
}
