@extends('layouts.appDash')

@section('css')
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
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
                        <button type="button" class="btn-close" data-bs-dismiss="alert" a></button>
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
                                <div>
                                    <label class="small mb-1" for="inputTajuk">{{ $noc->nama_jabatan }}
                                        ({{ $noc->sgktn_jabatan }})</label>
                                    <h3 style="text-transform:uppercase;">{{ $noc->tajuk_permohonan }}</h3>
                                    <label for="noc_id">ID: {{ $noc->noc_id }}{{ $noc->id }}</label>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div>
                                    <label class="me-2">Bahagian : </label>
                                    <label class="px-1 bg-secondary text-white rounded">
                                        {{ $noc->nama_bhgn }} ({{ $noc->sgktn_bhgn }})
                                    </label>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="mb-3">
                                    <label class="me-2">Klasifikasi : </label>
                                    <label class="px-1 bg-primary text-white rounded">{{ $noc->klasifikasi }} -
                                        {{ $noc->nama_kat }}
                                    </label>
                                </div>
                            </div>
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
                                        <h5>{{ \Carbon\Carbon::parse($noc->tarikh_permohonan)->format('d-m-Y') }}</h5>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="small mb-1" for="dateSurat">Tarikh Surat Permohonan</label>
                                        <h5>{{ \Carbon\Carbon::parse($noc->tarikh_surat_kementerian)->format('d-m-Y') }}
                                        </h5>
                                    </div>

                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <table style="text-align: left">
                                    <tr>
                                        <td style="width: 7rem">Status NOC :</td>
                                        <td><span class="badge bg-success">{{ $noc->nama_status1 }}</span></td>
                                    </tr>
                                    <tr>
                                        <td style="width: 7rem"></td>
                                        <td><span @if ($noc->tarikh_sedia_memo_kelulusan != null) hidden @endif
                                                class="badge bg-success">{{ $noc->nama_status2 }}</span></td>
                                    </tr>
                                </table>

                            </div>
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
            @include('page.noc.import.modal')
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
