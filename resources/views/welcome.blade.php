@extends('layouts.appPublic')

@section('header')
    @include('layouts.template.header')
@endsection

@section('content')
    <section class="position-absolute top-50 start-50 translate-middle text-center">
        <h1 class="display-3 fw-bold"><b>i-NOC</b></h1>
        <h5 class="display-6 text-white">Sistem NOC <i>(Notice Of Change)</i><br>
            <small>Bahagian Ekonomi Makro (BEM)</small>
        </h5>
        <div class="row mt-2 p-2">
            <div class="col m-2 p-2">
                <div class="card card-waves">
                    <div class="card-body">
                        <h5 class="display-6" id="data1">1000</h5>
                        <small>Jumlah<br>NOC</small>
                    </div>
                </div>
            </div>
            <div class="col m-2 p-2">
                <div class="card card-waves">
                    <div class="card-body">
                        <h5 class="display-6" id="data2">2000</h5>
                        <small>Dokumen<br>Tambahan</small>
                    </div>
                </div>
            </div>
            <div class="col m-2 p-2">
                <div class="card card-waves">
                    <div class="card-body">
                        <h5 class="display-6" id="data3">450</h5>
                        <small>Jumlah<br>NOC</small>
                    </div>
                </div>
            </div>
            <div class="col m-2 p-2">
                <div class="card card-waves">
                    <div class="card-body">
                        <h5 class="display-6" id="data4">300</h5>
                        <small>Jumlah<br>NOC</small>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-2 px-2">
            <p class="lead">
                <a href="/login" class="btn btn-lg btn-secondary fw-bold border-white bg-secondary">Log Masuk</a>
            </p>
        </div>

    </section>
@endsection

@section('js')
@endsection
