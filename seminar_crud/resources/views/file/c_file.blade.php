@extends('layouts.app')
@section('title','Input')

@section('content')
    <h2>Input Foto</h2>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)               
            <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
    <form action="/files" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <table>
           <tr>
            <td>nama</td>
            <td><input type="text" name="nama"></td>
           </tr>
           <tr>
               <td>File</td>
               <td><input type="file" name="file"></td>
           </tr>
           <tr>
               <td></td>
               <td><button type="submit">Simpan</button></td>
           </tr>
        </table>
    </form>
@endsection
