@extends('home')

@section('choose')
    {{-- ANDROID DAN WEB --}}
<div class="choose container my-5">
    <div class="head-tittle text-center pb-4">
        <h1>Android dan Web Developer's Seminar</h1>
    </div>
    <div class="row text-center">
       {{-- <div class="col-sm-2"></div> --}}
       <div class="col-sm-12 d-flex justify-content-center">
           <div class="android col-sm-6">
               <a href="/android"><img img src="/img/android_1.svg" id="catalog" class="img-fluid" alt="andro"></a>
               <h4 class="pt-3">Seminar Android</h4>
           </div>
           <div class="web col-sm-6">
            <a href="/web"><img img src="/img/web.jpg" id="catalog" class="img-fluid" alt="web"></a>
            <h4 class="pt-3">Seminar Web Developer's</h4>
           </div>
       </div>
       {{-- <div class="col-sm-2"></div> --}}
    </div>
</div>
@endsection