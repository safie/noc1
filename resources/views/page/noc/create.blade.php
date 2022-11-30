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
            <div class="card px-0">
                <div class="card-header border-bottom">
                    <!-- Wizard navigation-->
                    <div class="nav nav-pills nav-justified flex-column flex-xl-row nav-wizard" id="cardTab"
                        role="tablist">
                        <!-- Wizard navigation item 1-->
                        <a class="nav-item nav-link active" id="wizard1-tab" data-bs-toggle="tab" href="#wizard1"
                            role="tab" aria-controls="wizard1" aria-selected="true">
                            <div class="wizard-step-icon">1</div>
                            <div class="wizard-step-text">
                                <div class="wizard-step-text-name">Maklumat Projek</div>
                                <div class="wizard-step-text-details">Sila pilih nama projek atau kod projek</div>
                            </div>
                        </a>
                        <!-- Wizard navigation item 4-->
                        <a class="nav-item nav-link" id="wizard2-tab" data-bs-toggle="tab" href="#wizard2" role="tab"
                            aria-controls="wizard2" aria-selected="true">
                            <div class="wizard-step-icon">2</div>
                            <div class="wizard-step-text">
                                <div class="wizard-step-text-name">Maklumat NOC</div>
                                <div class="wizard-step-text-details">Isi maklumat berkaitan NOC</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="cardTabContent">
                        <!-- Wizard tab pane item 1-->
                        <div class="tab-pane fade show active" id="wizard1" role="tabpanel" aria-labelledby="wizard1-tab">
                            <div class="row justify-content-center small">
                                <h3 class="text-primary">Langkah 1</h3>
                                <p class="card-title mb-4">Cari projek menggunakan kod projek atau nama projek</p>
                                @if ($errors->any())
                                    <div class="alert alert-warning" role="alert">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <form class="d-flex justify-content-center" action="{{ route('noc.cariProjek') }}"
                                    method="GET">
                                    @csrf
                                    <div class="input-group mb-3">
                                        <select class="form-select w-25 rounded-start" id="pilih" name="pilih"
                                            aria-label="Default select example">
                                            <option value="kod" selected>Kod Projek</option>
                                            <option value="nama">Nama Projek</option>
                                        </select>
                                        <div class="input-group w-75 rounded-end ">
                                            <input class="form-control rounded-0" id="input" name="input"
                                                type="text" aria-label="Search" placeholder="Carian Projek..."
                                                autofocus />
                                            <button class="input-group-text" type="submit"><i
                                                    data-feather="search"></i></button>
                                        </div>
                                    </div>
                                </form>
                                <form method="POST" action="{{ route('noc.store') }}">
                                    <div class="row justify-content-center">
                                        <div class="card card-body mb-3">
                                            <div class="form-check">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Kod Projek</th>
                                                            <th scope="col">Nama Projek</th>
                                                        </tr>
                                                    <tbody>
                                                        @if ($projek->count() > 0)
                                                            @foreach ($projek as $index => $data)
                                                                <tr>

                                                                    <td class="form-check-label">
                                                                        <input class="form-check-input" id="checkProjek"
                                                                            name="checkProjek" type="radio"
                                                                            value="{{ $data->kod_projek }}">
                                                                    </td>
                                                                    <td class="form-check-label">

                                                                        {{ $data->kod_projek }}

                                                                    </td>
                                                                    <td class="form-check-label">

                                                                        {{ $data->nama_projek }}

                                                                    </td>

                                                                </tr>
                                                            @endforeach
                                                        @else
                                                            <tr>
                                                                <td colspan="4">Tiada maklumat!</td>
                                                            </tr>
                                                        @endif
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                {!! $projek->links() !!}
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <hr class="my-4" />
                                    <div class="d-flex justify-content-end">
                                        <button class="btn btn-light" type="button">Previous</button>
                                        <button class="btn btn-primary" type="button">Next</button>
                                    </div> --}}
                            </div>
                        </div>
                        <!-- Wizard tab pane item 2-->
                        <div class="tab-pane fade" id="wizard2" role="tabpanel" aria-labelledby="wizard2-tab">
                            <div class="row justify-content-center small">
                                <h3 class="text-primary">Langkah 2</h3>
                                <p class="mb-4">Isi maklumat NOC yang hendak dipohon</p>
                            </div>

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

                            <div class="row mb-3" id="kosProjek" style="display:none">
                                <div class="d-flex justify-content-between">
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
