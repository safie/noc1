@extends('layouts.appDash')

@section('css')

@endsection

@section('icon', 'plus-square')
@section('tajuk', 'Edit Bahagian')
@section('button')
    <a class="btn btn-sm btn-light text-primary" href="{{ route('bahagian.index') }}">
        <i class="me-1" data-feather="arrow-left"></i>
        Kembali Senarai
    </a>
@endsection

@section('content')
    @include('layouts.template.header_compact')
    <div class="container-fluid px-4 mt-4">
        <form method="POST" action="{{ route('kementerian.update', $kementerian->id) }}">
            @csrf
            @method('PUT')
            @if ($errors->any())
                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Maaf, ada ralat data!</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
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
                            <div class="card-header">
                                Kemasukan data
                                <i class="text-muted" data-feather="info" data-bs-toggle="tooltip"
                                    data-bs-placement="left" title="input yang perlu diisi"></i>
                            </div>
                            <div class="card-body">
                                <!-- Form Group (first name)-->
                                <div class="mb-3">
                                    <label class="small mb-1" for="inputFirstName">Nama Kementerian</label>
                                    <input class="form-control" id="inputNamaKementerian" name="inputNamaKementerian"
                                        value="{{ $kementerian->nama_jabatan }}" type="text"
                                        placeholder="Masukkan nama kementerian/jabatan..." />
                                </div>
                                <div class="mb-3">
                                    <label class="small mb-1" for="inputFirstName">Singkatan Bahagian</label>
                                    <input class="form-control" id="inputSingkatan" name="inputSingkatan" type="text"
                                        value="{{ $kementerian->sgktn_jabatan }}"
                                        placeholder="Masukkan singkatan kementerian/jabatan..." />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-header-actions">
                        <div class="card-header">
                            Tindakan
                            <i class="text-muted" data-feather="info" data-bs-toggle="tooltip" data-bs-placement="left"
                                title="Data akan disimpan"></i>
                        </div>
                        <div class="card-body">
                            <div class="d-grid"><button type="submit" class="fw-500 btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection

@section('js')

@endsection
