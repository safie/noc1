@extends('layouts.appPublic')

@section('header')
    @include('layouts.template.header')
@endsection

@section('content')
    <section class="container d-flex flex-column min-vh-100 justify-content-center align-items-center">
        <div class="d-flex flex-column align-items-center ">
            <img src="{{ asset('pic/jata_negara_small_2.png') }}" id="mask" alt="i-NOC" style="width:180px; height:155px">
            <br>
            <div class="d-flex justify-content-center display-1 h1 text-white"><strong>i-NOC</strong></div>
            <div class="d-flex justify-content-center h1 text-white">Sistem Pemantauan NOC
            </div>
            <div class="d-flex justify-content-center h6 text-white lead"></div>
        </div>

        <div class="row mx-auto mt-5">
            <div class="col-sm-6 col-xl-2 mb-4">
                <div class="card bg-dark text-white h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center text-center">
                            <div class="me-3">
                                <div class="text-white-80" style="height: 5rem">Jumlah Keseluruhan NOC</div>
                                <div class="display-6 fw-bold">{{ count_all_noc() }}</div>
                            </div>
                            {{-- <i class="feather-xl text-white-50" data-feather="award"></i> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-2 mb-4">
                <div class="card bg-success text-white h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center text-center">
                            <div class="me-3">
                                <div class="text-white-80" style="height: 5rem">Semakan Dokumen</div>
                                <div class="display-6 fw-bold">{{ count_all_semakan() }}</div>
                            </div>
                            {{-- <i class="feather-xl text-white-50" data-feather="check-circle"></i> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-2 mb-4">
                <div class="card bg-warning text-white h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center text-center">
                            <div class="me-3">
                                <div class="text-white-80" style="height: 5rem">Penyediaan Ulasan Bajet/Teknikal</div>
                                <div class="display-6 fw-bold">{{ count_all_ulasan() }}</div>
                            </div>
                            {{-- <i class="feather-xl text-white-50" data-feather="clipboard"></i> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-2 mb-4">
                <div class="card bg-danger text-white h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center text-center">
                            <div class="me-3">
                                <div class="text-white-80" style="height: 5rem">Maklumat Tambahan</div>
                                <div class="display-6 fw-bold">{{ count_all_tambahan() }}</div>
                            </div>
                            {{-- <i class="feather-xl text-white-50" data-feather="alert-triangle"></i> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-2 mb-4">
                <div class="card bg-secondary text-white h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center text-center">
                            <div class="me-3">
                                <div class="text-white-80" style="height: 5rem">Penyediaan Memo/Surat</div>
                                <div class="display-6 fw-bold">{{ count_all_memo() }}</div>
                            </div>
                            {{-- <i class="feather-xl text-white-50" data-feather="message-square"></i> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-2 mb-4">
                <div class="card bg-info text-white h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center text-center">
                            <div class="me-3">
                                <div class="text-white-80" style="height: 5rem">Modul NOC (Selesai)</div>
                                <div class="display-6 fw-bold">{{ count_all_selesai() }}</div>
                            </div>
                            {{-- <i class="feather-xl text-white-50" data-feather="coffee"></i> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex align-items-center justify-content-center mt-5">
            <p class="lead">
                <a href="/login" class="btn btn-lg btn-secondary fw-bold border-white bg-primary">Log Masuk</a>
            </p>
        </div>

    </section>
@endsection

@section('css')
    <style>
        .bg-image {
            background: url({{ asset('pic/abstract_bg2.jpg') }}) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        #mask {
            filter: drop-shadow(0 0 0.5rem rgb(0, 0, 0));
        }
    </style>
@endsection
