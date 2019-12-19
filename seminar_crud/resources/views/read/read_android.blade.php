@extends('layouts.app')
@section('tittle','Peserta Seminar Android')
@section('content')
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
        <th scope="col">Update</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($data as $item)
      <tr>      
        <td>{{$loop->iteration}}</td>
        <td>{{$item->nama}}</td>
        <td>{{$item->alamat}}</td>
        <td>{{$item->usia}}</td>
        <td>{{$item->email}}</td>
        <td>{{$item->no_tlp}}</td>
        <td>{{$item->jenis_kelamin}}</td>
        <td><a class="btn btn-success" data-toggle="modal" data-target="#edit{{$item->id_seminar}}">Ubah</a></td>
        <td><a class="btn btn-danger" href="#">Hapus</a></td>   
      </tr>
      @endforeach
    </tbody>
  </table>
</div>


{{-- MODAL --}}
@foreach ($data as $item)
<div class="modal fade" id="edit{{$item->id_seminar}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h5 class="modal-title ml-auto" id="exampleModalLabel">Masukkan Data Diri Anda</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
          <form action="/PesertaAndroid/update/{{$item->id_seminar}}" method="post">
                <div class="modal-body">
                  {{ csrf_field() }}
                  {{method_field('PUT')}}
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4">
                                
                                <input type="hidden" name="id_seminar" id="">
                                {{-- nama --}}
                                <div class="form-group">
                                    <label class="font-weight-bold" for="nama">Nama</label>
                                    <input type="text" name="nama" id="nama" class="form-control"
                                        value="{{$item->nama}}" aria-describedby="helpId">
                                    <small id="helpId" class="text-muted">Masukkan Nama anda</small>
                                </div>
                            </div>
                            <div class="col-md-5">
                                {{-- Alamat --}}
                                <div class="form-group">
                                    <label class="font-weight-bold" for="alamat">Alamat</label>
                                    <input type="text" name="alamat" id="alamat" class="form-control"
                                        value="{{$item->alamat}}" aria-describedby="helpId">
                                    <small id="helpId" class="text-muted">Masukkan Alamat anda</small>
                                </div>
                            </div>
                            <div class="col-md-3">
                                {{-- Usia --}}
                                <div class="form-group">
                                    <label class="font-weight-bold" for="usia">Usia</label>
                                    <input type="text" name="usia" id="usia" class="form-control"
                                        aria-describedby="helpId" value="{{$item->usia}}">
                                    <small id="helpId" class="text-muted">Masukkan umur anda</small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mr-auto">
                                {{-- Email --}}
                                <div class="form-group">
                                    <label class="font-weight-bold" for="email">Email</label>
                                    <input type="email" name="email" id="email" class="form-control"
                                        value="{{$item->email}}" aria-describedby="helpId">
                                    <small id="helpId" class="text-muted">Masukkan Email anda</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                {{-- No Hp --}}
                                <div class="form-group">
                                    <label class="font-weight-bold" for="no_tlp">No Handphone</label>
                                    <input type="text" name="no_tlp" id="no_tlp" class="form-control"
                                        aria-describedby="helpId" value="{{$item->no_tlp}}">
                                    <small id="helpId" class="text-muted">Masukkan No Handphone anda</small>
                                    {{-- End HP --}}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group" class="radio">
                                    <!-- Jenis Kelamin -->
                                    <label for="input1"><b>Jenis Kelamin</b></label><br>
                                    <input type="radio" name="jenis_kelamin" id="optionsRadio1"
                                        value="{{$item->jenis_kelamin}}" checked>Pria &nbsp;
                                    <input type="radio" name="jenis_kelamin" id="optionsRadio1"
                                        value="{{$item->jenis_kelamin}}" checked>wanita
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach
{{-- save alert --}}
<script>
  var msg = '{{Session::get('alert')}}';
  var exist = '{{Session::has('alert')}}';
  if (exist) {
    alert(msg);
      }
</script>
{{-- end alert  --}}
@endsection
