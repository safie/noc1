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
            <div class="card card-body mb-3">
                <h5>Pilih Projek:</h5>
                <form class="d-flex justify-content-center" action="{{ route('noc.cariProjek') }}" method="GET">
                    @csrf
                    <div class="input-group mb-3">
                        <select class="form-select w-25 rounded-start" id="pilih" name="pilih"
                            aria-label="Default select example">
                            <option value="kod" selected>Kod Projek</option>
                            <option value="nama">Nama Projek</option>

                        </select>
                        <div class="input-group w-75 rounded-end ">
                            <input class="form-control rounded-0" id="input" name="input" type="text"
                                aria-label="Search" placeholder="Carian Projek..." autofocus />
                            <button class="input-group-text" type="submit"><i data-feather="search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="card card-body mb-3">
                <table class="table small">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Kod Projek</th>
                            <th scope="col">Nama Projek</th>
                            <th scope="col">Tindakan</th>
                        </tr>
                    <tbody>
                        @if ($projek->count() > 0)
                            @foreach ($projek as $index => $data)
                                <tr>
                                    <td>
                                        {{ $index + $projek->firstItem() }}
                                    </td>
                                    <td>
                                        {{ $data->kod_projek }}
                                    </td>
                                    <td>
                                        <p class="mx-0 my-0 fw-bold">{{ $data->getKementerian->nama_jabatan }}</p>
                                        {{ $data->nama_projek }}

                                    </td>
                                    <td>
                                        <a class="btn btn-primary" type="button" href="{{ route('noc.mohonNocProjek',$data->kod_projek)}}">Mohon NOC</a>
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

                <div class="d-flex justify-content-center">
                    {!! $projek->links() !!}
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
