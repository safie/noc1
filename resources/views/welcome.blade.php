@extends('layouts.appPublic')

@section('header')
    @include('layouts.template.header')
@endsection

@section('content')
    <div class="position-absolute top-50 start-50 translate-middle text-center">
        <h1 class="display-3 fw-bold text-white"><b>i-NOC</b></h1>
        <div class="display-6 text-white">Sistem NOC <i>(Notice Of Change)</i><br>
        </div>
        <small class="h1 text-white">Bahagian Bajet Pembangunan (BBP)</small>

        <div class="row mt-5 mb-5">
            <div class="col-lg-6 col-xl-4 mb-4">
                <div class="card bg-dark text-white h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="me-3">
                                <div class="text-white-75 small">Keseluruhan NOC</div>
                                <div class="text-lg fw-bold">{{count_all_noc()}}</div>
                            </div>
                            <i class="feather-xl text-white-50" data-feather="award"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4 mb-4">
                <div class="card bg-success text-white h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="me-3">
                                <div class="text-white-75 small">Semakan Bahagian</div>
                                <div class="text-lg fw-bold">{{count_all_semakan()}}</div>
                            </div>
                            <i class="feather-xl text-white-50" data-feather="check-circle"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4 mb-4">
                <div class="card bg-warning text-white h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="me-3">
                                <div class="text-white-75 small">Penyediaan Ulasan</div>
                                <div class="text-lg fw-bold">{{count_all_ulasan()}}</div>
                            </div>
                            <i class="feather-xl text-white-50" data-feather="clipboard"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4 mb-4">
                <div class="card bg-danger text-white h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="me-3">
                                <div class="text-white-75 small">Maklumat Tambahan</div>
                                <div class="text-lg fw-bold">{{count_all_tambahan()}}</div>
                            </div>
                            <i class="feather-xl text-white-50" data-feather="alert-triangle"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4 mb-4">
                <div class="card bg-secondary text-white h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="me-3">
                                <div class="text-white-75 small">Penyediaan Memo</div>
                                <div class="text-lg fw-bold">{{count_all_memo()}}</div>
                            </div>
                            <i class="feather-xl text-white-50" data-feather="message-square"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4 mb-4">
                <div class="card bg-info text-white h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="me-3">
                                <div class="text-white-75 small">Selesai</div>
                                <div class="text-lg fw-bold">{{count_all_selesai()}}</div>
                            </div>
                            <i class="feather-xl text-white-50" data-feather="coffee"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <p class="lead">
                <a href="/login" class="btn btn-lg btn-secondary fw-bold border-white bg-secondary">Log Masuk</a>
            </p>
        </div>

    </div>
@endsection

@section('js')
@endsection
