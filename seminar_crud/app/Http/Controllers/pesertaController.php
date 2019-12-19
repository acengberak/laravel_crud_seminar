<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peserta;

class pesertaController extends Controller
{
  public function read(){
    $data= Peserta::all();
    return view('read.read_android');
  }
  public function read_web(){
    $data= Peserta::all();
    return view('read.read_web');
  }
}
