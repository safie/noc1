@extends('layouts.appDash')

@section('css')
    {{-- <link href="https://cdn.jsdelivr.net/npm/litepicker/dist/css/litepicker.css" rel="stylesheet" /> --}}
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
@endsection

@section('icon', 'plus-square')
@section('tajuk', $tajuk_page)
@section('button')
    <a class="btn btn-sm btn-light text-primary" href="{{ route('noc.index') }}">
        <i class="me-1" data-feather="arrow-left"></i>
        Kembali Senarai
    </a>
@endsection

@section('content')
    @include('layouts.template.header_compact')
    <div class="container-fluid px-4 mt-4">
        <form method="POST" action="{{ route('kementerian.store') }}">
            @csrf
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
                                    <label class="small mb-1" for="inputTajuk">Tajuk Permohonan</label>
                                    <input class="form-control" id="inputTajuk" name="inputTajuk" type="text"
                                        placeholder="Masukkan nama kementerian/jabatan..." />
                                </div>
                                <div class="mb-3">
                                    <label class="small mb-1" for="inputTajuk">Kod MyProjek</label>
                                    <input class="form-control" id="inputKodMyprojek" name="inputKodMyprojek" type="text"
                                        placeholder="Masukkan kod MyProjek.." />
                                </div>
                                <div class="mb-3">
                                    <label class="small mb-1" for="inputTajuk">No. Rujukan Surat</label>
                                    <input class="form-control" id="inputRujukan" name="inputRujukan" type="text"
                                        placeholder="Masukkan nombor rujukan surat..." />
                                </div>
                                <div class="mb-3">
                                    <label class="small mb-1" for="inputFirstName">Tarikh Permohonan</label>
                                    <div class="input-group input-group-joined">
                                        <span class="input-group-text">
                                            <i data-feather="calendar"></i>
                                        </span>
                                        <input class="form-control ps-0" id="tarikhMohonNOC" name="tarikhMohonNOC"
                                            placeholder="Pilih tarikh..." />
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="small mb-1" for="inputFirstName">Tarikh Surat Permohonan</label>
                                    <div class="input-group input-group-joined">
                                        <span class="input-group-text">
                                            <i data-feather="calendar"></i>
                                        </span>
                                        <input class="form-control ps-0" id="tarikhSuratMohon" name="tarikhSuratMohon"
                                            placeholder="Pilih tarikh..." />
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="small mb-1">Bahagian</label>
                                    <select class="form-select" aria-label="Default select example" id="inputBahagian" name="inputBahagian">
                                        <option selected disabled>Sila pilih:</option>
                                        @foreach ($bahagian as $data)
                                        <option value="{{$data->id}}" >{{ $data->nama_bhgn }} ({{ $data->sgktn_bhgn }})</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="small mb-1">Kementerian/Jabatan</label>
                                    <select class="form-select" aria-label="Default select example" id="inputJabatan" name="inputJabatan">
                                        <option selected disabled>Sila pilih:</option>
                                        @foreach ($kementerian as $data)
                                        <option value="{{$data->id}}" >{{ $data->nama_jabatan }} ({{ $data->sgktn_jabatan }})</option>
                                        @endforeach
                                    </select>
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
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript">
        $ (document).ready(function() {
            $ ('#tarikhMohonNOC').datepicker({
                  format: 'dd/mm/yyyy',
            });
        });
        $ (document).ready(function() {
            $ ('#tarikhSuratMohon').datepicker({
                  format: 'dd/mm/yyyy',
            });
        });
    </script>

    {{-- <script src="https://cdn.jsdelivr.net/npm/litepicker/dist/bundle.js" crossorigin="anonymous"></script>
    // <script src="{{ asset('sb-admin-pro/dist/js/litepicker.js') }}"></> --}}
@endsection
