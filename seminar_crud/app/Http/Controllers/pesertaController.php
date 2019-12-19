<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peserta;

class pesertaController extends Controller
{
    public function androidDetail()
    {
        $data = Peserta::all();
        return view('detail.d_android', compact('data'));
    }

    public function webDetail()
    {
        return view('detail.d_web');
    }

    public function storeAndroid(Request $request)
    {
        $request->validate([

            'nama' => 'required',
            'alamat' => 'required',
            'usia' => 'required',
            'email' => 'required',
            'no_tlp' => 'required',
            'jenis_kelamin' => 'required',
        ]);

        $android = new Peserta;

        $android->nama = $request->nama;
        $android->alamat = $request->alamat;
        $android->usia = $request->usia;
        $android->email = $request->email;
        $android->no_tlp = $request->no_tlp;
        $android->jenis_kelamin = $request->jenis_kelamin;

        $android->save();
        return redirect()->back()->with('alert', 'Updated!');
    }
    public function read()
    {
        $data = Peserta::all();
        return view('read.read_android', compact('data'));
    }
    public function read_web()
    {
        $data = Peserta::all();
        return view('read.read_web', compact('data'));
    }
    public function destroy($id){
      $data= Peserta::find($id);
      $data->delete();

      return redirect('/PesertaAndroid');
    }
}
