@extends('layouts.appDash')

@section('css')
@endsection

@section('content')
    <!-- Main page content-->
    <div class="container-xl px-4 mt-5">
        {{-- @include('layouts.template.header_dashboard') --}}
        <div class="row">
            <div class="col-xl-2 col-md-4 mb-2">
                <!-- Dashboard info widget 1-->
                <div class="card bg-primary border-0">
                    <div class="card-body text-center">
                        <h6 class="text-white">Bilangan NOC</h6>
                        <div class=" mb-2">
                            <span class="display-4 text-white">{{ $noc }}</span>
                            {{-- <span class="text-white-50">per year</span> --}}
                        </div>
                        {{-- <div class="progress bg-white-25 rounded-pill" style="height: 0.5rem">
                            <div class="progress-bar bg-white w-75 rounded-pill" role="progressbar" aria-valuenow="75"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-md-4 mb-2">
                <!-- Dashboard info widget 2-->
                <div class="card bg-success border-0">
                    <div class="card-body text-center">
                        <h6 class="text-white">Semakan Bahagian</h6>
                        <div class=" mb-2">
                            <span class="display-4 text-white">{{ $nocSemak }}</span>
                            {{-- <span class="text-white-50">per year</span> --}}
                        </div>
                        {{-- <div class="progress bg-white-25 rounded-pill" style="height: 0.5rem">
                            <div class="progress-bar bg-white w-75 rounded-pill" role="progressbar" aria-valuenow="75"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-md-4 mb-2">
                <!-- Dashboard info widget 1-->
                <div class="card bg-warning border-0">
                    <div class="card-body text-center">
                        <h6 class="text-white">Penyediaan Ulasan</h6>
                        <div class=" mb-2">
                            <span class="display-4 text-white">{{ $nocSediaUlasan }}</span>
                            {{-- <span class="text-white-50">per year</span> --}}
                        </div>
                        {{-- <div class="progress bg-white-25 rounded-pill" style="height: 0.5rem">
                            <div class="progress-bar bg-white w-75 rounded-pill" role="progressbar" aria-valuenow="75"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-md-4 mb-2">
                <!-- Dashboard info widget 2-->
                <div class="card bg-danger border-0">
                    <div class="card-body text-center">
                        <h6 class="text-white">Maklumat Tambahan</h6>
                        <div class=" mb-2">
                            <span class="display-4 text-white">{{ $nocTambahan }}</span>
                            {{-- <span class="text-white-50">per year</span> --}}
                        </div>
                        {{-- <div class="progress bg-white-25 rounded-pill" style="height: 0.5rem">
                            <div class="progress-bar bg-white w-75 rounded-pill" role="progressbar" aria-valuenow="75"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-md-4 mb-2">
                <!-- Dashboard info widget 1-->
                <div class="card bg-black border-0">
                    <div class="card-body text-center">
                        <h6 class="text-white">Penyediaan Memo</h6>
                        <div class=" mb-2">
                            <span class="display-4 text-white">{{ $nocMemo }}</span>
                            {{-- <span class="text-white-50">per year</span> --}}
                        </div>
                        {{-- <div class="progress bg-white-25 rounded-pill" style="height: 0.5rem">
                            <div class="progress-bar bg-white w-75 rounded-pill" role="progressbar" aria-valuenow="75"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-md-4 mb-2">
                <!-- Dashboard info widget 2-->
                <div class="card bg-info border-0">
                    <div class="card-body text-center">
                        <h6 class="text-white">Modul NOC MyProjek</h6>
                        <div class=" mb-2">
                            <span class="display-4 text-white">{{ $nocModul }}</span>
                            {{-- <span class="text-white-50">per year</span> --}}
                        </div>
                        {{-- <div class="progress bg-white-25 rounded-pill" style="height: 0.5rem">
                            <div class="progress-bar bg-white w-75 rounded-pill" role="progressbar" aria-valuenow="75"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div> --}}
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-4 mb-4">
                <!-- Report summary card example-->
                <div class="card mb-4">
                    <div class="card-header">Top 10 NOC mengikut klasifikasi</div>
                    <div class="list-group list-group-flush small">
                         @foreach ($nocKlasifikasi as $data)
                        <div class="list-group-item list-group-item-action d-flex justify-content-between">
                            <p class="ms-1 w-100"><i class="fas fa-atom text-green me-2"></i>{{$data->klasifikasi}}</p>
                            <p class="flex-shrink-1 bg-primary text-white px-2 py-1 rounded-2 align-self-center">{{ $data->jumlah }}</p>
                        </div>
                        @endforeach
                    </div>
                    <div class="card-footer position-relative border-top-0">
                        <a class="stretched-link" href="#!">
                            <div class="text-xs d-flex align-items-center justify-content-between">
                                Senarai NOC
                                <i class="fas fa-long-arrow-alt-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card mb-4">
                    <div class="card-header">Top 10 NOC mengikut status</div>
                    <div class="list-group list-group-flush small">
                        @foreach ($nocStatus as $data)
                        <div class="list-group-item list-group-item-action d-flex align-items-center justify-content-between"">
                            <p class="ms-1 w-100"><i class="fas fa-tag text-purple me-2"></i>{{$data->nama_status}}</p>
                            <p class="flex-shrink-1 bg-primary text-white px-2 py-1 rounded-2 align-self-center">{{ $data->jumlah }}</p>
                        </div>
                        @endforeach
                    </div>
                    <div class="card-footer position-relative border-top-0">
                        <a class="stretched-link" href="#!">
                            <div class="text-xs d-flex align-items-center justify-content-between">
                                Senarai NOC
                                <i class="fas fa-long-arrow-alt-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card mb-4">
                    <div class="card-header">Top 10 NOC mengikut Kementerian</div>
                    <ol class="list-group list-group-flush list-group-numbered small">
                         @foreach ($nocJabatan as $data)
                        <li class="list-group-item list-group-item-action d-flex justify-content-between">
                            <p class="ms-1 w-100">{{$data->nama_jabatan}}</p>
                            <p class="flex-shrink-1 bg-primary text-white px-2 py-1 rounded-2 align-self-center">{{ $data->jumlah }}</p>
                        </li>
                        @endforeach
                    </ol>
                    <div class="card-footer position-relative border-top-0">
                        <a class="stretched-link" href="#!">
                            <div class="text-xs d-flex align-items-center justify-content-between">
                                Senarai NOC
                                <i class="fas fa-long-arrow-alt-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('sb-admin-pro/dist/assets/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('sb-admin-pro/dist/assets/demo/chart-bar-demo.js') }}"></script>
    <script src="{{ asset('sb-admin-pro/dist/assets/demo/chart-pie-demo.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/litepicker/dist/bundle.js" crossorigin="anonymous"></script>
    <script src="{{ asset('sb-admin-pro/dist/js/litepicker.js') }}"></script>
@endsection
