@extends('layouts.app')
@section('title','upload')
@section('content')
  <div class="container">
    <h2>Upload File</h2>
    <a href="/files/create" class="btn btn-primary btn-lg my-5">Tambah Data</a>

    <table class="table table-striped table-dark text-center">
        <thead>
            <tr>
                
                <th scope="col">Nama</th>
                <th scope="col">File</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $row)
            <tr>
                <td>{{$row->nama}}</td>
                <td><img src="file/{{$row->file}}" width="100" height="width"></td>
                <td><i class="fas fa-edit fa-lg"></i></td>
            </tr>
            @endforeach
        </tbody>
    </table>
  </div>
@endsection