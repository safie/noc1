@extends('layouts.appDash')

@section('css')
    {{-- <link href="https://cdn.jsdelivr.net/npm/litepicker/dist/css/litepicker.css" rel="stylesheet" /> --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"
        rel="stylesheet" />
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

        <div class="row gx-4">
            <form method="POST" action="{{ route('noc.store') }}">
                @csrf
                @if ($errors->any())
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Maaf, ada ralat data!</strong>
                                <button class="btn-close" data-bs-dismiss="alert" type="button"
                                    aria-label="Close"></button>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                @endif
                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card card-header-actions">
                            <div class="card-header">
                                Kemasukan data
                                <i class="text-muted" data-feather="info" data-bs-toggle="tooltip" data-bs-placement="left"
                                    title="input yang perlu diisi"></i>
                            </div>
                            <div class="card-body">

                                <!-- Form Group (first name)-->
                                <p><small> Tanda (*) adalah wajib di isi.</small></p>
                                <div class="mb-3">
                                    <label class="small mb-1">Kementerian/Jabatan *</label>
                                    <select class="form-select" id="inputJabatan" name="inputJabatan"
                                        aria-label="Default select example">
                                        <option selected disabled>Sila pilih:</option>
                                        @foreach ($kementerian as $data)
                                            <option value="{{ $data->id }}">{{ $data->nama_jabatan }}
                                                ({{ $data->sgktn_jabatan }})
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="small mb-1">Klasifikasi *</label>
                                    <select class="form-select" id="inputKlasifikasi" name=" inputKlasifikasi"
                                        aria-label="Default select example" onchange="pilihKlasifikasi(this.value)">
                                        <option selected disabled>Sila pilih:</option>
                                        @foreach ($kategori as $data)
                                            <option value="{{ $data->id }}">{{ $data->kod }} -
                                                {{ $data->nama_kat }}
                                            </option>
                                        @endforeach
                                    </select>
                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                </div>
                                <div class="row" id="kosProjek" style="display:none">
                                    {{-- <div class="col-md-6 mb-3">
                                        <label class="small mb-1" for="inputTajuk">Kos Sebelum *</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">RM</span>
                                            </div>
                                            <input class="form-control" id="inputTajuk" name="inputTajuk" type="text"
                                                placeholder="Kos projek sebelum" autocomplete="off" />
                                        </div> --}}
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="small mb-1" for="inputTajuk">Perubahan Kos *</label>
                                    <input class="form-control" id="inputKos" name="inputKos" type="number"
                                        placeholder="Kos projek" autocomplete="off" />
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between">
                            <div class="flex-fill mx-1">
                                <label class="small mb-1" for="inputFirstName">Tarikh Permohonan *</label>
                                <div class="input-group input-group-joined">
                                    <span class="input-group-text">
                                        <i data-feather="calendar"></i>
                                    </span>
                                    <input class="form-control ps-0" id="tarikhMohonNOC" name="tarikhMohonNOC"
                                        placeholder="Pilih tarikh..." autocomplete="off" />
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="small mb-1" for="inputTajuk">No. Rujukan Surat</label>
                                <input class="form-control" id="inputRujukan" name="inputRujukan" type="text"
                                    placeholder="Masukkan nombor rujukan surat..." />
                            </div>
                            <div class="mb-3">
                                <label class="small mb-1" for="inputFirstName">Tarikh Surat Permohonan</label>
                                <div class="input-group input-group-joined">
                                    <span class="input-group-text">
                                        <i data-feather="calendar"></i>
                                    </span>
                                    <input class="form-control ps-0" id="tarikhSuratMohon" name="tarikhSuratMohon"
                                        placeholder="Pilih tarikh..." autocomplete="off" />
                                </div>
                            </div>

                            {{-- <div class="mb-3">
                                    <label class="small mb-1">Bahagian</label>
                                    <select class="form-select" id="inputBahagian" name="inputBahagian"
                                        aria-label="Default select example">
                                        <option selected disabled>Sila pilih:</option>
                                        @foreach ($bahagian as $data)
                                            <option value="{{ $data->id }}">{{ $data->sgktn_bhgn }} -
                                                {{ $data->nama_bhgn }}

                                            </option>
                                        @endforeach
                                    </select>
                                </div> --}}

                            <div class="mb-3" hidden>
                                <label class="small mb-1" for="statusNOC">noc_flow</label>
                                <input class="form-control" id="noc_flow" name="noc_flow" type="text" value=""
                                    placeholder="NOC Flow" />
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
                    <div class="d-grid spinner-hide">
                        <button class="fw-500 btn btn-black" type="submit">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>

    </div>

@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="{{ asset('js/easy-number-separator.js') }}"></script>

    <script>
        easyNumberSeparator({
            selector: '.number-separator',
            separator: ',',
            decimalSeparator: '.',
            resultInput: '#result_input',
        })
    </script>
    
    <script type="text/javascript">
        $(document).ready(function() {
            $('#tarikhMohonNOC').datepicker({
                format: 'dd/mm/yyyy',
                autoclose: true
            });
        });
        $(document).ready(function() {
            $('#tarikhSuratMohon').datepicker({
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
        });

        //Fungsi untuk dropdown kategori D7.1, D7.2, D8.1 muncul field kos
        $(function() {
            $('#inputKlasifikasi').on('change', function() {
                if (this.value == 11 || this.value == 12 || this.value == 15) {
                    $("#kosProjek").show();

                } else {
                    // alert("Died");
                    $("#kosProjek").hide();
                }
            });
        });
    </script>

@endsection
