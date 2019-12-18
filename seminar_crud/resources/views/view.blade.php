@extends('home')

@section('choose')
    {{-- ANDROID DAN WEB --}}
<div class="choose container my-5">
    <div class="row text-center">
        <div class="col-sm-3"></div>
        <div class="col-sm-3">
            <div class="android">
                <h1>ANDROID</h1>
                <a href="/android" class="btn btn-primary">More Info</a>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="web">
                <h1>WEB</h1>
                <a href="" class="btn btn-primary">More Info</a>
            </div>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
@endsection