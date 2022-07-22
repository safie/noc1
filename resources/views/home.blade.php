@extends('layouts.appDash')

@section('css')
@endsection

@section('content')
    <!-- Main page content-->
    <div class="container-xl px-4 mt-5">
        {{-- @include('layouts.template.header_dashboard') --}}
        <div class="row">
            <div class="col-xl-2 col-md-4 col-sm-6 mb-2">
                <!-- Dashboard info widget 1-->
                <div class="card bg-primary border-0">
                    <div class="card-body text-center">
                        <h6 class="text-white">Keseluruhan NOC</h6>
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
            <div class="col-xl-2 col-md-4 col-sm-6 mb-2">
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
            <div class="col-xl-2 col-md-4 col-sm-6 mb-2">
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
            <div class="col-xl-2 col-md-4 col-sm-6 mb-2">
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
            <div class="col-xl-2 col-md-4 col-sm-6 mb-2">
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
            <div class="col-xl-2 col-md-4 col-sm-6 mb-2">
                <!-- Dashboard info widget 2-->
                <div class="card bg-info border-0">
                    <div class="card-body text-center">
                        <h6 class="text-white">Selesai</h6>
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
                    <div class="card-header">Top 5 NOC mengikut klasifikasi</div>
                    <div class="card-body">
                        <table class="table table-sm table-striped table-hover mx-0 my-0">
                            @if ($nocKlasifikasi->count() > 0)
                                @foreach ($nocKlasifikasi as $data)
                                    <tr style="height: 50px">
                                        <td class="align-middle" style="height: 100%">
                                            <span class="badge bg-dark">{{ $data->klasifikasi }}</span>
                                        </td>
                                        <td style="width: 20rem; height: 100%" class="text-wrap small align-middle">
                                            {{ $data->nama_kat }}
                                        </td>
                                        <td style="width: 5rem;--bs-bg-opacity: .75;height: 100%"
                                            class="align-middle bg-primary text-center text-white">
                                            <strong>{{ $data->jumlah }}</strong>
                                        </td>

                                    </tr>
                                @endforeach
                            @else
                                <div class="text-center">
                                    <p class="align-middle" style="height: 100%">Tiada NOC</p>
                                </div>
                            @endif

                        </table>
                    </div>
                    <div class="card-footer position-relative border-top-0">
                        <!-- Button trigger modal -->
                        <a class="stretched-link" data-bs-toggle="modal" data-bs-target="#senaraiKlasifikasiNoc" href="#">
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
                    <div class="card-header text-warning">Top 5 NOC mengikut status</div>
                    <div class="card-body">
                        <table class="table table-sm table-striped table-hover mx-0 my-0">
                            @if ($nocStatus->count() > 0)
                                @foreach ($nocStatus as $data)
                                    <tr style="height: 50px">
                                        <td style="width: 20rem" class="text-wrap small align-middle">
                                            {{ $data->nama_status }}
                                        </td>
                                        <td style="width: 5rem;--bs-bg-opacity: .75;"
                                            class="align-middle bg-warning text-center text-white">
                                            <strong>{{ $data->jumlah }}</strong>
                                        </td>

                                    </tr>
                                @endforeach
                            @else
                                <div class="text-center">
                                    <p class="align-middle" style="height: 100%">Tiada NOC</p>
                                </div>
                            @endif
                        </table>
                    </div>

                    <div class="card-footer position-relative border-top-0">
                        <!-- Button trigger modal -->
                        <a class="stretched-link" data-bs-toggle="modal" data-bs-target="#senaraiStatusNoc" href="#">
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
                    <div class="card-header text-success">Top 5 NOC mengikut Kementerian</div>
                    <div class="card-body">
                        <table class="table table-sm table-striped table-hover mx-0 my-0">
                            @if ($nocJabatan->count() > 0)
                                @foreach ($nocJabatan as $data)
                                    <tr style="height: 50px">
                                        <td style="width: 40rem" class="text-wrap small align-middle">
                                            {{ $data->nama_jabatan }}
                                        </td>
                                        <td style="width: 5rem;--bs-bg-opacity: .75;"
                                            class="align-middle bg-success text-center text-white">
                                            <strong>{{ $data->jumlah }}</strong>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <div class="text-center">
                                    <p class="align-middle" style="height: 100%">Tiada NOC</p>
                                </div>
                            @endif
                        </table>

                    </div>
                    <div class="card-footer position-relative border-top-0">
                        <!-- Button trigger modal -->
                        <a class="stretched-link" data-bs-toggle="modal" data-bs-target="#senaraiKementerian" href="#">
                            <div class="text-xs d-flex align-items-center justify-content-between">
                                Senarai NOC
                                <i class="fas fa-long-arrow-alt-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @include('home_modal')
        </div>
    </div>
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('sb-admin-pro/dist/assets/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('sb-admin-pro/dist/assets/demo/chart-bar-demo.js') }}"></script>
    <script src="{{ asset('sb-admin-pro/dist/assets/demo/chart-pie-demo.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/litepicker/dist/bundle.js" crossorigin="anonymous"></script>
    <script src="{{ asset('sb-admin-pro/dist/js/litepicker.js') }}"></script>
@endsection
