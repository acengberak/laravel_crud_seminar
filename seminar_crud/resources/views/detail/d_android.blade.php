@extends('layouts.app')
@section('title','Detail Seminar Android')
@section('content')

<div class="container">
    <div class="tittle py-5">
        <h1 class="text-center">Seminar Android Developer</h1>
    </div>
    {{-- content 1 --}}
    <div class="content-1">
        <div class="row">
            <div class="col-sm-6">
                <h3 class="py-3">Pelajari keahlian development Android</h3>
                <p>Google sedang membuat kursus pelatihan berbasis kelas baru untuk mengajarkan keahlian development
                    Android kepada para mahasiswa di Indonesia. Kursus, yang akan disediakan melalui lisensi Creative
                    Commons, akan tersedia dalam Bahasa Indonesia maupun Bahasa Inggris.</p>
                <br>
                <p>Kursus ini dirancang untuk mahasiswa ilmu komputer, dan memandu mereka melalui pembuatan aplikasi
                    sambil mengembangkan keahlian yang diperlukan untuk mendapatkan pekerjaan tingkat dasar sebagai
                    developer Android. Setelah menyelesaikan kursus dan membuat aplikasi di kursus, mereka akan siap
                    untuk mengikuti ujian Associate Android Developer Certification.</p>
            </div>
            <div class="col-sm-6">
                <img src="/img/android_1.svg" alt="android1">
            </div>
        </div>
        {{-- End Content 1 --}}
    </div>
    {{-- Content 2 --}}
    <div class="content-2 mt-3">
        <div class="row">
            <div class="col-sm-4 text-center">
                <div class="card">
                    <img src="/img/learn-online-01.svg" class="img-fluid" alt="learn">
                    <div class="card-body">
                        <h4 class="card-title">Belajar Online</h4>
                        <p class="card-text">Google dan Udacity bekerja sama membuat serangkaian kursus untuk membantu
                            Anda mempelajari development Android. Pelajarilah kursus-kursus ini sesuai kemampuan Anda.
                            Ikuti kursus individual secara gratis, atau daftarkan diri di nanodegree untuk mendapatkan
                            bantuan dan arahan sambil belajar membuat paket aplikasi.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 text-center">
                <div class="card">
                    <img src="/img/come-to-class-01.svg" class="img-fluid" alt="come">
                    <div class="card-body">
                        <h4 class="card-title">Pelajari bersama para Mitra Pelatihan Resmi kami</h4>
                        <p class="card-text">Kami bekerja sama dengan mitra pelatihan berikut guna mempersiapkan siswa
                            untuk Associate Android Developer Certification.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 text-center">
                <div class="card">
                    <img src="/img/get_certified.svg" class="img-fluid" alt="get">
                    <div class="card-body">
                        <h4 class="card-title">Dapatkan sertifikasi</h4>
                        <p class="card-text">Untuk mendapatkan pekerjaan sebagai developer Android, Anda perlu
                            mengembangkan keahlian yang tepat, juga perlu menunjukkan kepada perekrut dan manajer
                            perekrutan bahwa Anda sudah siap. Memperoleh Associate Android Developer Certification dari
                            Google akan menjadi bukti kemampuan Anda.</p>
                    </div>
                </div>
            </div>
            {{-- End Content 2  --}}
        </div>
    </div>

    <div class="content-3 py-5">
        <div class="banner-bg">
            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#tambah">Daftar
                Seminar</button>
        </div>
    </div>

    {{-- MODAL --}}
    <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h5 class="modal-title ml-auto" id="exampleModalLabel">Masukkan Data Diri Anda</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/android" method="post">
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-4">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="id_seminar" id="">
                                    {{-- nama --}}
                                    <div class="form-group">
                                        <label class="font-weight-bold" for="nama">Nama</label>
                                        <input type="text" name="nama" id="nama" class="form-control" placeholder=""
                                            aria-describedby="helpId">
                                        <small id="helpId" class="text-muted">Masukkan Nama anda</small>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    {{-- Alamat --}}
                                    <div class="form-group">
                                        <label class="font-weight-bold" for="alamat">Alamat</label>
                                        <input type="text" name="alamat" id="alamat" class="form-control" placeholder=""
                                            aria-describedby="helpId">
                                        <small id="helpId" class="text-muted">Masukkan Alamat anda</small>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    {{-- Usia --}}
                                    <div class="form-group">
                                        <label class="font-weight-bold" for="usia">Usia</label>
                                        <input type="text" name="usia" id="usia" class="form-control"
                                            aria-describedby="helpId">
                                        <small id="helpId" class="text-muted">Masukkan umur anda</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mr-auto">
                                    {{-- Email --}}
                                    <div class="form-group">
                                        <label class="font-weight-bold" for="email">Email</label>
                                        <input type="email" name="email" id="email" class="form-control" placeholder=""
                                            aria-describedby="helpId">
                                        <small id="helpId" class="text-muted">Masukkan Email anda</small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    {{-- No Hp --}}
                                    <div class="form-group">
                                        <label class="font-weight-bold" for="no_tlp">No Handphone</label>
                                        <input type="text" name="no_tlp" id="no_tlp" class="form-control"
                                            aria-describedby="helpId">
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
                                        <input type="radio" name="jenis_kelamin" id="optionsRadio1" value="pria"
                                            checked>Pria &nbsp;
                                        <input type="radio" name="jenis_kelamin" id="optionsRadio1" value="wanita"
                                            checked>wanita
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            {{-- save alert --}}
                            <script>
                                var msg = '{{Session::get('alert')}}';
                                var exist = '{{Session::has('alert')}}';
                                if (exist) {
                                    alert(msg);
                                }
                            </script>
                            {{-- end alert  --}}
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection
