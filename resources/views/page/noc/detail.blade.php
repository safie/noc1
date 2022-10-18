@extends('layouts.appDash')

@section('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"
        rel="stylesheet">
@endsection

@section('icon', 'briefcase')
@section('tajuk', 'Maklumat NOC')
@section('button')
    <a class="btn btn-sm btn-light text-primary" href="{{ route('noc.index') }}">
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
            <div class="col-lg-5">
                <div class="card mb-4">
                    <div class="card card-header-actions">
                        <div class="card-header">
                            Maklumat NOC
                            <i class="text-muted" data-feather="info" data-bs-toggle="tooltip" data-bs-placement="left"
                                title="Maklumat NOC"></i>
                        </div>
                        <div class="card-body">
                            <!-- Form Group (first name)-->
                            <div class="row">
                                <div class="py-0">
                                    <label class="small" for="inputTajuk">{{ $noc->nama_jabatan }}
                                        ({{ $noc->sgktn_jabatan }})</label>
                                    <h3 class="my-0" style="text-transform:uppercase;">{{ $noc->tajuk_permohonan }}</h3>
                                    <label class="small" for="noc_id">ID: {{ $noc->noc_id }}{{ $noc->id }}</label>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div>
                                    <label class="small me-2"> {{ $noc->nama_bhgn }} ({{ $noc->sgktn_bhgn }})</label>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                 <div>
                                    <label class="small me-2"> {{ $noc->kod }} - {{ $noc->nama_kat }}</label>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="small mb-1" for="kodMyProjek">Kod MyProjek</label>
                                        <h5>{{ $noc->kod_myprojek }}</h5>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="small mb-1" for="noRujukan">No. Rujukan Surat</label>
                                        <h5>{{ $noc->no_rujukan }}</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="small mb-1" for="datePermohonan">Tarikh Permohonan</label>
                                        @if ($noc->tarikh_permohonan != null)
                                            <h5>{{ \Carbon\Carbon::parse($noc->tarikh_permohonan)->format('d-m-Y') }}</h5>
                                        @else
                                            <h5>Tiada data</h5>
                                        @endif
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="small mb-1" for="dateSurat">Tarikh Surat Permohonan</label>
                                        @if ($noc->tarikh_permohonan != null)
                                            <h5>{{ \Carbon\Carbon::parse($noc->tarikh_surat_kementerian)->format('d-m-Y') }}
                                            </h5>
                                        @else
                                            <h5>Tiada data</h5>
                                        @endif

                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="small mb-1" for="datePermohonan">Tarikh Surat Kelulusan</label>
                                        @if ($noc->tarikh_hantar_surat_lulus != null)
                                            <h5>{{ \Carbon\Carbon::parse($noc->tarikh_hantar_surat_lulus)->format('d-m-Y') }}
                                            </h5>
                                        @else
                                            <h5>Tiada data</h5>
                                        @endif
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="small mb-1" for="datePermohonan">No. Rujukan Surat Kelulusan</label>
                                        @if ($noc->no_rujukan_surat_kelulusan != null)
                                            <h5>{{ $noc->no_rujukan_surat_kelulusan }}
                                            </h5>
                                        @else
                                            <h5>Tiada data</h5>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="mb-3">
                                    <table style="text-align: left">
                                        <tr>
                                            <td style="width: 7rem">Status NOC :</td>
                                            <td><span class="badge bg-info text-dark">{!! $noc->nama_status1 !!}</span></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 7rem"></td>
                                            <td><span class="badge bg-info text-dark"
                                                    @if ($noc->tarikh_sedia_memo_kelulusan != null) hidden @endif>{!! $noc->nama_status2 !!}</span>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <hr>
                            @if ($noc->status_noc != 'noc_20')
                            <div class="text-end">
                                <button class="fw-500 btn btn-dark mb-2" data-bs-toggle="modal" data-bs-target="#modalPadam"
                                    type="button">
                                    Batal NOC
                                </button>

                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                {{-- @include('page.noc.import.status_noc') --}}
                @include('page.noc.import.status_noc_log')
            </div>
            <div class="col-lg-3">

                @include('page.noc.import.tindakanModal_status')

            </div>
            @include('page.noc.import.modalTindakan')
            @include('page.noc.import.modalPadam')
        </div>
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
