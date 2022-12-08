@extends('layouts.appDash')

@section('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"
        rel="stylesheet">
    <style>
        @media print {
            @page {
                size: A4;
                margin: 0mm;
            }

            html,
            body {
                width: 1024px;
            }

            body {
                margin: 0 auto;
            }
        }
    </style>
@endsection

@section('icon', 'briefcase')
@section('tajuk', 'Maklumat NOC')
@section('button')
    <a class="btn btn-sm btn-light text-primary d-print-none" href="{{ route('noc.index') }}">
        <i class="me-1" data-feather="arrow-left"></i>
        Kembali senarai NOC
    </a>
@endsection

@section('content')
    @include('layouts.template.header_compact')
    <div class="container-fluid px-4 mt-4">
        @if ($errors->any())
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert" aria-label="Close">
                        <strong>Maaf, ada ralat data!</strong>
                        <button class="btn-close" data-bs-dismiss="alert" type="button" a></button>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @endif
        <div class="row gx-4">
            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card card-header-actions">
                        {{-- <div class="card-header">
                            Maklumat NOC
                            <i class="text-muted" data-feather="info" data-bs-toggle="tooltip" data-bs-placement="left"
                                title="Maklumat NOC"></i>
                        </div> --}}
                        <div class="card-body">
                            <!-- Form Group (first name)-->
                            <div class="row">
                                <div class="d-flex justify-content-between">
                                    <label class="small" for="inputTajuk">{{ $noc->getBahagian->nama_bhgn }}
                                        ({{ $noc->getBahagian->sgktn_bhgn }})</label>
                                    <label class="small">
                                        @if ($noc->tarikh_permohonan != null)
                                            Tarikh Permohonan:
                                            {{ \Carbon\Carbon::parse($noc->tarikh_permohonan)->format('d-m-Y') }}
                                        @else
                                            <h5>Tiada data</h5>
                                        @endif
                                    </label>
                                </div>
                            </div>
                            <div class="row mb-2 mt-2">
                                <div class="py-0">
                                    <h3 class="my-0"
                                        style="text-transform:uppercase;text-align: justify;text-justify: inter-word;">
                                        {{ $noc->getProjek->nama_projek }}</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="d-flex justify-content-between">
                                    <label class="small" for="noc_id">NOC ID:
                                        {{ $noc->noc_id }}{{ $noc->id }}</label>
                                    <label class="small" for="noc_id">Kod Projek: {{ $noc->kod_myprojek }}</label>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="d-flex justify-content-between">
                                    <label class="small me-2 fw-bold"> {{ $noc->getBahagian->nama_bhgn }}
                                        ({{ $noc->getBahagian->sgktn_bhgn }})</label>

                                    <div>
                                        <label class="small me-2 fw-bold"> Klasifikasi:</label>
                                        <label class="small me-2 fw-bold"> {{ $noc->getKategori->kod }} -
                                            {{ $noc->getKategori->nama_kat }}</label>
                                    </div>
                                </div>
                            </div>

                            <hr>
                            <div class="row">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <label class="small fw-bold" for="kodMyProjek">Tarikh Surat:</label>
                                        <label class="small">
                                            @if ($noc->tarikh_permohonan != null)
                                                {{ \Carbon\Carbon::parse($noc->tarikh_surat_kementerian)->format('d-m-Y') }}
                                            @else
                                                <h5>Tiada data</h5>
                                            @endif
                                        </label>
                                    </div>
                                    <div>
                                        <label class="small fw-bold" for="noRujukan">Rujukan Surat:</label>
                                        <label class="small">{{ $noc->no_rujukan }}</label>
                                    </div>

                                </div>
                                <div class="small">
                                    <label class="fw-bold">Dokumen lampiran:</label>
                                    {{ $noc->url_dokumen ?? 'Tiada maklumat' }}

                                </div>
                            </div>
                            <hr>
                            <div class="small">
                                <label class="fw-bold"> Ulasan BBP (Bajet):</label>
                                <p style="text-align: justify;text-justify: inter-word;">
                                    {{ $noc->ulasan_bajet ?? 'Tiada maklumat' }}
                                </p>
                            </div>
                            <hr>
                            <div class="small">
                                <label class="fw-bold"> Ulasan BPN (Teknikal):</label>
                                <p style="text-align: justify;text-justify: inter-word;">
                                    {{ $noc->ulasan_teknikal ?? 'Tiada maklumat' }}</p>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <label class="small fw-bold">Tarikh Memo:</label>
                                        <label
                                            class="small">{{ \Carbon\Carbon::parse($noc->tarikh_hantar_memo_kelulusan)->format('d-m-Y') ?? 'Tiada maklumat' }}</label>
                                    </div>
                                    <div>
                                        <label class="small fw-bold">No. Rujukan Memo Kelulusan:</label>
                                        <label
                                            class="small">{{ $noc->no_rujukan_surat_kelulusan ?? 'Tiada maklumat' }}</label>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="small">
                                    <label class="fw-bold">Keputusan: </label>
                                    <label class="text-uppercase">NOC berjaya</label>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <label class="small fw-bold">Tarikh Kelulusan:</label>
                                        <label class="small">
                                            @if ($noc->tarikh_hantar_surat_lulus != null)
                                                {{ \Carbon\Carbon::parse($noc->tarikh_hantar_surat_lulus)->format('d-m-Y') }}
                                            @else
                                                Tiada data
                                            @endif
                                        </label>
                                    </div>

                                    <div>
                                        <label class="small fw-bold">No. Rujukan Surat
                                            Kelulusan:</label>
                                        <label class="small">
                                            @if ($noc->no_rujukan_surat_kelulusan != null)
                                                {{ $noc->no_rujukan_surat_kelulusan }}
                                            @else
                                                Tiada data
                                            @endif
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <hr>
                            <div class="row">
                                <div class="mb-3 small">
                                    <table style="text-align: left">
                                        <tr>
                                            <td style="width: 7rem">Status NOC :</td>
                                            <td><span class="badge bg-info text-dark">{!! $noc->nama_status1 !!}</span></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 7rem"></td>
                                            <td><span class="badge bg-info text-dark"
                                                    @if ($noc->tarikh_hantar_surat_lulus != null) hidden @endif>{!! $noc->nama_status2 !!}</span>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <hr>
                            @if (Auth::user()->peranan == 2 and $noc->status_noc != 'noc_16')
                                <div class="text-end d-print-none">
                                    <button class="fw-500 btn btn-dark mb-2" data-bs-toggle="modal"
                                        data-bs-target="#modalPadam" type="button">
                                        Batal NOC
                                    </button>

                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-lg-12 mb-2">
                        @include('page.noc.import.tindakanModal_status')
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        @include('page.noc.import.status_noc_log')
                    </div>

                </div>
            </div>
            @include('page.noc.import.modalTindakan')

        </div>
        @include('page.noc.import.modalPadam')
    </div>

@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="{{ asset('sb-admin-pro/dist/js/datatables/datatables-simple-demo.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#tarikh').datepicker({
                format: 'dd/mm/yyyy',
                autoclose: true
            });
        });
        $(document).ready(function() {
            $('#tarikhMohon').datepicker({
                format: 'dd/mm/yyyy',
                autoclose: true
            });
        });
        $(document).ready(function() {
            $('#tarikhSemak1').datepicker({
                format: 'dd/mm/yyyy',
                autoclose: true
            });
        });
        $(document).ready(function() {
            $('#tarikhSemak2').datepicker({
                format: 'dd/mm/yyyy',
                autoclose: true
            });
        });

        $('.spinner-hide').hide();

        $(function() {
            $('.button-disabled').on('click', function() {
                $('.button-disabled,input[type=submit],button[type=submit]').attr('disabled', 'true')
                    .addClass("disabled");
                $('.spinner-hide').show();
            });

            $("form").on('submit', function() {
                $('.button-disabled,input[type=submit],button[type=submit]').attr('disabled', 'true')
                    .addClass("disabled");
                $('.spinner-hide').show();
            });
        })
    </script>
@endsection
