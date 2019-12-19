@extends('layouts.app')
@section('tittle'.'Peserta Seminar Android')
@section('android_table')
<div class="container">
  <div class="jumbotron jumbotron-fluid text-center" style="background-color:#7ed5cb;">
    <div class="container">
      <h1 class="display-4">Peserta Seminar Android</h1>
    </div>
  </div>
  <table class="table table-striped table-dark">
    <thead>
      <tr>
        <th scope="col">Id Peserta</th>
        <th scope="col">Nama</th>
        <th scope="col">Alamat</th>
        <th scope="col">Usia</th>
        <th scope="col">Email</th>
        <th scope="col">No Telepon</th>
        <th scope="col">Jenis Kelamin</th>
      </tr>
    </thead>
    <tbody>
      @foreach($data as $item)
      <tr>
        <td>{{$item->id_seminar}}</td>
        <td>{{$item->nama}}</td>
        <td>{{$item->alamat}}</td>
        <td>{{$item->usia}}</td>
        <td>{{$item->email}}</td>
        <td>{{$item->no_tlp}}</td>
        <td>{{$item->jenis_kelamin}}</td>
        <td><a class="btn btn-success" href="#">Ubah</a></td>
        <td>
          <form class="" action="/PesertaAndroid/{{$item->id}}" method="post">
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <button class="btn btn-danger" type="submit" value="delete">Hapus</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
