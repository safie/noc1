@extends('layouts.appPdf')

@section('css')
    <style>
    </style>
@endsection

@section('content')
    <div class="card shadow-none">
        <div class="card-header text-center text-uppercase">{{ $noc->tajuk_permohonan }}</div>
        <div class="card-body">
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

        </div>
    </div>
@endsection

@section('js')
@endsection
