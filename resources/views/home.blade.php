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
                        <h6 class="text-white" style="height: 4rem">Jumlah Keseluruhan NOC</h6>
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
                        <h6 class="text-white" style="height: 4rem">Semakan Dokumen oleh Bahagian</h6>
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
                        <h6 class="text-white" style="height: 4rem">Penyediaan Ulasan Bajet/Teknikal</h6>
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
                        <h6 class="text-white" style="height: 4rem">Maklumat Tambahan</h6>
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
                        <h6 class="text-white" style="height: 4rem">Penyediaan Memo & Surat</h6>
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
                        <h6 class="text-white" style="height: 4rem">Modul NOC (Selesai)</h6>
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
            <div class="col-xl-6 mb-2">
                <!-- Dashboard info widget 1-->
                <div class="card bg-secondary border-0">
                    <div class="card-body text-center">
                        <h6 class="text-white" style="height: 4rem">Jumlah Kos Sebelum</h6>
                        <div class=" mb-2">
                            <span class="display-5 text-white">RM
                                {{ number_format($nocKosSebelum, 2, '.', ',') ?? 'Tiada maklumat' }}</span>
                            {{-- <span class="text-white-50">per year</span> --}}
                        </div>
                        {{-- <div class="progress bg-white-25 rounded-pill" style="height: 0.5rem">
                            <div class="progress-bar bg-white w-75 rounded-pill" role="progressbar" aria-valuenow="75"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="col-xl-6 mb-2">
                <!-- Dashboard info widget 1-->
                <div class="card bg-orange border-0">
                    <div class="card-body text-center">
                        <h6 class="text-white" style="height: 4rem">Jumlah Kos Perubahan</h6>
                        <div class=" mb-2">
                            <span class="display-5 text-white">RM
                                {{ number_format($nocKosPerubahan, 2, '.', ',') ?? 'Tiada maklumat' }}</span>
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
                <div class="card mb-2">
                    <div class="card-header"><b>Top 5 NOC mengikut klasifikasi</b></div>
                    <div class="card-body px-2 py-2 align-middle">
                        <table
                            class="table bg-light table-sm table-striped table-hover mx-0 my-0 rounded rounded-3 overflow-hidden">
                            @if ($nocKlasifikasi->count() > 0)
                                @foreach ($nocKlasifikasi as $data)
                                    <tr style="height: 50px">
                                        <td class="align-middle px-3 py-2 text-center text-white bg-black">
                                            {{ $data->kod }}
                                        </td>
                                        <td style="width: 20rem" class="text-wrap small align-middle px-3 py-2">
                                            {{ $data->nama_kat }}
                                        </td>
                                        <td style="width: 5rem;--bs-bg-opacity: .75;height: 100%"
                                            class="align-middle bg-primary text-center text-white px-3 py-2">
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
                    <div class="card-footer position-relative border-top-0 bg-white">
                        <!-- Button trigger modal -->
                        <a class="stretched-link" data-bs-toggle="modal" data-bs-target="#senaraiKlasifikasiNoc"
                            href="#">
                            <div class="text-sm d-flex align-items-center justify-content-between">
                                Senarai NOC
                                <i class="fas fa-long-arrow-alt-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card mb-4">
                    <div class="card-header text-warning"><b>Top 5 NOC mengikut status</b></div>
                    <div class="card-body px-2 py-2 align-middle">
                        <table
                            class="table bg-light table-sm table-striped table-hover mx-0 my-0 rounded rounded-3 overflow-hidden">
                            @if ($nocStatus->count() > 0)
                                @foreach ($nocStatus as $data)
                                    <tr style="height: 50px">
                                        <td style="width: 20rem" class="text-wrap small align-middle px-3 py-2">
                                            {!! $data->nama_status !!}
                                        </td>
                                        <td style="width: 5rem;--bs-bg-opacity: .75;"
                                            class="align-middle bg-warning text-center text-white px-3 py-3">
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

                    <div class="card-footer position-relative border-top-0 bg-white">
                        <!-- Button trigger modal -->
                        <a class="stretched-link" data-bs-toggle="modal" data-bs-target="#senaraiStatusNoc" href="#">
                            <div class="text-sm d-flex align-items-center justify-content-between">
                                Senarai NOC
                                <i class="fas fa-long-arrow-alt-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card mb-4">
                    <div class="card-header text-success"><b>5 NOC mengikut Kementerian</b></div>
                    <div class="card-body px-2 py-2 align-middle">
                        <table
                            class="table bg-light table-sm table-striped table-hover mx-0 my-0 rounded rounded-3 overflow-hidden">
                            @if ($nocJabatan->count() > 0)
                                @foreach ($nocJabatan as $data)
                                    <tr style="height: 50px">
                                        <td style="width: 40rem" class="text-wrap small align-middle px-3 py-2">
                                            {{ $data->nama_jabatan }}
                                        </td>
                                        <td style="width: 5rem;--bs-bg-opacity: .75;"
                                            class="align-middle bg-success text-center text-white px-3 py-3">
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
                    <div class="card-footer position-relative border-top-0 bg-white">
                        <!-- Button trigger modal -->
                        <a class="stretched-link" data-bs-toggle="modal" data-bs-target="#senaraiKementerian"
                            href="#">
                            <div class="text-sm d-flex align-items-center justify-content-between">
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
    {{-- <script src="{{ asset('sb-admin-pro/dist/assets/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('sb-admin-pro/dist/assets/demo/chart-bar-demo.js') }}"></script>
    <script src="{{ asset('sb-admin-pro/dist/assets/demo/chart-pie-demo.js') }}"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/litepicker/dist/bundle.js" crossorigin="anonymous"></script>
    <script src="{{ asset('sb-admin-pro/dist/js/litepicker.js') }}"></script>
@endsection
