@extends('layouts.app')
@section('tittle'.'Peserta Seminar Web')
@section('web_table')
<div class="container">
  <div class="jumbotron jumbotron-fluid text-center" style="background-color:#7ed5cb;">
    <div class="container">
      <h1 class="display-4">Peserta Seminar Web</h1>
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
      <tr>
        <td>1</td>
        <td>Otto</td>
        <td>Jelambar</td>
        <td>23 tahiun</td>
        <td>xxxxx@example.com</td>
        <td>0823-XXXX-XXXX</td>
        <td>Pria</td>
        <td><a class="btn btn-success" href="#">Ubah</a></td>
        <td><a class="btn btn-danger" href="#">Hapus</a></td>
      </tr>
    </tbody>
  </table>
</div>
@endsection
