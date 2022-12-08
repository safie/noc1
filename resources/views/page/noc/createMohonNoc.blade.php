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
        <div class="row">
            <div class="card card-body mb-3">
                <form method="POST" action="{{ route('noc.store') }}">
                    @csrf
                    <div class="row justify-content-center small">
                        <p class="fw-bold">{{ $projek->kod_projek }} | {{ $projek->getKementerian->nama_jabatan }}</p>
                        <h3 class="text-primary"> {{ $projek->nama_projek }}</h3>
                    </div>
                    <hr>
                    <p class="mb-4">Maklumat NOC:</p>
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

                    <div class="mb-3 px-2">
                        <label class="small mb-1">Klasifikasi *</label>
                        <select class="form-select form-select-md " id="inputKlasifikasi" name=" inputKlasifikasi"
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

                    <div id="kosProjek" style="display:none">
                        <div class="d-flex justify-content-between mb-3 px-1">
                            <div class="flex-fill mx-1">
                                <label class="small mb-1" for="inputTajuk">Kos Sebelum *</label>
                                <input class="form-control" id="inputTajuk" name="inputTajuk" type="number"
                                    placeholder="Kos projek sebelum" autocomplete="off" />
                            </div>
                            <div class="flex-fill mx-1">
                                <label class="small mb-1" for="inputTajuk">Perubahan Kos *</label>
                                <input class="form-control" id="inputKos" name="inputKos" type="number"
                                    placeholder="Kos projek" autocomplete="off" />
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between px-1">
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
                        <div class="flex-fill mx-1">
                            <label class="small mb-1" for="inputTajuk">No. Rujukan Surat</label>
                            <input class="form-control" id="inputRujukan" name="inputRujukan" type="text"
                                placeholder="Masukkan nombor rujukan surat..." />
                        </div>
                    </div>

                    <hr class="my-4" />
                    <div class="d-flex justify-content-end">
                        {{-- <button class="btn btn-light" type="button">Previous</button> --}}
                        <button class="btn btn-primary" type="button">Submit</button>
                    </div>
                </form>
            </div>
        </div>

    </div>

@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
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
