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
                                <div class="mb-3">
                                    <label class="small mb-1" for="inputTajuk">{{ $noc->nama_jabatan }}
                                        ({{ $noc->sgktn_jabatan }})</label>
                                    <h3 style="text-transform:uppercase;">{{ $noc->tajuk_permohonan }}</h3>
                                    <hr>
                                    <label>Klasifikasi : {{ $noc->klasifikasi }} - {{ $noc->nama_kat }}</label>
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
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="card card-header-actions mb-2">
                    <div class="card-header">
                        Status NOC
                        <i class="text-muted" data-feather="info" data-bs-toggle="tooltip" data-bs-placement="left"
                            title="Sejarah Status NOC"></i>
                    </div>
                    <div class="card-body">
                        <div class="mb-4">
                            <ol class="list-group list-group-numbered list-group-flush">
                                <li class="list-group-item d-flex justify-content-between">
                                    <div class="ms-2 w-50">
                                        {{ \Carbon\Carbon::parse($noc->tarikh_submit)->format('d-m-Y') }}</div>
                                    <div class="ms-1 flex-grow-1 w-100">NOC Baharu</div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <div class="ms-2 w-50">
                                        {{ \Carbon\Carbon::parse($noc->tarikh_submit)->format('d-m-Y') }}</div>
                                    <div class="ms-1 flex-grow-1 w-100">Semakan Dokumen</div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <div class="ms-2 w-50">
                                        {{ \Carbon\Carbon::parse($noc->tarikh_submit)->format('d-m-Y') }}</div>
                                    <div class="ms-1 flex-grow-1 w-100">Mohon Ulasan</div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <div class="ms-2 w-50">
                                        {{ \Carbon\Carbon::parse($noc->tarikh_submit)->format('d-m-Y') }}</div>
                                    <div class="ms-1 flex-grow-1 w-100">Penyediaan Ulasan</div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <div class="ms-2 w-50">
                                        {{ \Carbon\Carbon::parse($noc->tarikh_submit)->format('d-m-Y') }}</div>
                                    <div class="ms-1 flex-grow-1 w-100">Ulasan dihantar</div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <div class="ms-2 w-50">
                                        {{ \Carbon\Carbon::parse($noc->tarikh_submit)->format('d-m-Y') }}</div>
                                    <div class="ms-1 flex-grow-1 w-100">Penyediaan Memo Kelulusan</div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <div class="ms-2 w-50">
                                        {{ \Carbon\Carbon::parse($noc->tarikh_submit)->format('d-m-Y') }}</div>
                                    <div class="ms-1 flex-grow-1 w-100">Terima Kelulusan</div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <div class="ms-2 w-50">
                                        {{ \Carbon\Carbon::parse($noc->tarikh_submit)->format('d-m-Y') }}</div>
                                    <div class="ms-1 flex-grow-1 w-100">Penyediaan Surat Kelulusan</div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <div class="ms-2 w-50">
                                        {{ \Carbon\Carbon::parse($noc->tarikh_submit)->format('d-m-Y') }}</div>
                                    <div class="ms-1 flex-grow-1 w-100">Terima Surat Kelulusan</div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <div class="ms-2 w-50">
                                        {{ \Carbon\Carbon::parse($noc->tarikh_submit)->format('d-m-Y') }}</div>
                                    <div class="ms-1 flex-grow-1 w-100">Hantar Surat Kelulusan</div>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
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
