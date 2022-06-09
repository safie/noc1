@extends('layouts.appDash')

@section('css')

@endsection

@section('icon', 'briefcase')
@section('tajuk', 'Maklumat NOC')
@section('button')
    <a class="btn btn-sm btn-light text-primary" href="{{ route('noc.index') }}">
        <i class="me-1" data-feather="user-plus"></i>
        Kembali senarai NOC
    </a>
@endsection

@section('content')
    @include('layouts.template.header_compact')
    <div class="container-fluid px-4 mt-4">
        <div class="row gx-4">
            <div class="col-lg-6">
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
                                <div class="mb-3">
                                    <label class="small mb-1" for="inputTajuk">{{ $noc->nama_jabatan }}
                                        ({{ $noc->sgktn_jabatan }})</label>
                                    <h3 style="text-transform:uppercase;">{{ $noc->tajuk_permohonan }}</h3>
                                    <hr>
                                    <label>Klasifikasi : {{ $noc->klasifikasi }}</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="small mb-1" for="kodMyProjek">Kod MyProjek</label>
                                        <h4>{{ $noc->kod_myprojek }}</h4>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="small mb-1" for="noRujukan">No. Rujukan Surat</label>
                                        <h4>{{ $noc->no_rujukan }}</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="small mb-1" for="datePermohonan">Tarikh Permohonan</label>
                                        <h4>{{ \Carbon\Carbon::parse($noc->tarikh_permohonan)->format('j F, Y') }}</h4>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="small mb-1" for="dateSurat">Tarikh Surat Permohonan</label>
                                        <h4>{{ \Carbon\Carbon::parse($noc->tarikh_surat_kementerian)->format('j F, Y') }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card card-header-actions mb-2">
                    <div class="card-header">
                        Status NOC
                        <i class="text-muted" data-feather="info" data-bs-toggle="tooltip" data-bs-placement="left"
                            title="Sejarah Status NOC"></i>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <ol class="list-group list-group-numbered list-group-flush">
                                <li class="list-group-item d-flex justify-content-between">
                                    <div class="mx-2 w-100">{{ $noc->nama_status }}</div>
                                    <div class="flex-shrink-1">{{ \Carbon\Carbon::parse($noc->tarikh_submit)->format('j F, Y') }}</div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <div class="mx-2 w-100">{{ $noc->nama_status }}</div>
                                    <div class="flex-shrink-1">{{ \Carbon\Carbon::parse($noc->tarikh_submit)->format('j F, Y') }}</div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <div class="mx-2 w-100">{{ $noc->nama_status }}</div>
                                    <div class="flex-shrink-1">{{ \Carbon\Carbon::parse($noc->tarikh_submit)->format('j F, Y') }}</div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <div class="mx-2 w-100">{{ $noc->nama_status }}</div>
                                    <div class="flex-shrink-1">{{ \Carbon\Carbon::parse($noc->tarikh_submit)->format('j F, Y') }}</div>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card card-header-actions">
                    <div class="card-header">
                        Tindakan
                        <i class="text-muted" data-feather="info" data-bs-toggle="tooltip" data-bs-placement="left"
                            title="Data akan disimpan"></i>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('noc.semakLulus', $noc->id) }}" method="POST">
                            @csrf
                            <a class="d-grid"><button type="submit" class="fw-500 btn btn-primary mb-2">Lulus
                                    Semakan</button>
                            </a>
                        </form>
                        <form action="{{ route('noc.semakSemula', $noc->id) }}" method="POST">
                            @csrf
                            <div class="d-grid"><button type="submit" class="fw-500 btn btn-danger mb-2">Semak
                                    semula</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="{{ asset('sb-admin-pro/dist/js/datatables/datatables-simple-demo.js') }}"></script>
@endsection
