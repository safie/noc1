@extends('layouts.appDash')

@section('css')
@endsection

@section('icon', 'plus-square')
@section('tajuk', $tajuk_page)
@section('button')
    <a class="btn btn-sm btn-light text-primary" href="{{ route('pengguna.index') }}">
        <i class="me-1" data-feather="arrow-left"></i>
        Kembali Senarai
    </a>
@endsection

@section('content')
    @include('layouts.template.header_compact')
    <div class="container-fluid px-4 mt-4">
        <form method="POST" action="{{ route('pengguna.store') }}">
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
                                Pengisian maklumat
                                <i class="text-muted" data-feather="info" data-bs-toggle="tooltip" data-bs-placement="left"
                                    title="input yang perlu diisi"></i>
                            </div>
                            <div class="card-body">
                                <!-- Form Group (first name)-->
                                <div class="mb-3">
                                    <label class="small mb-1" for="inputNama">Nama</label>
                                    <input class="form-control" id="inputNama" name="inputNama" type="text"
                                        placeholder="Masukkan nama..." />
                                </div>
                                <div class="mb-3">
                                    <label class="small mb-1" for="inputEmel">Emel</label>
                                    <input class="form-control" id="email" name="email" type="email"
                                        placeholder="Masukkan alamat emel..." />
                                </div>
                                <div class="mb-3">
                                    <label class="small mb-1" for="inputKatalaluan">Katalaluan</label>
                                    <input class="form-control" id="inputKatalaluan" name="inputKatalaluan" type="password"
                                        placeholder="Masukkan katalaluan..." />
                                </div>
                                <div class="mb-3">
                                    <label class="small mb-1" for="inputKatalaluan">Sahkan Katalaluan </label>
                                    <input class="form-control" id="inputKatalaluan_confirmation"
                                        name="inputKatalaluan_confirmation" type="password"
                                        placeholder="Masukkan katalaluan..." />
                                </div>
                                <div class="mb-3">
                                    <label class="small mb-1">Peranan</label>
                                    <select class="form-select" aria-label="Default select example" id="inputPeranan"
                                        name="inputPeranan">
                                        <option selected disabled>Sila pilih:</option>
                                        @foreach ($peranan as $data)
                                            <option value="{{ $data->id }}">{{ $data->peranan }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="small mb-1">Bahagian</label>
                                    <select class="form-select" aria-label="Default select example" id="inputBahagian"
                                        name="inputBahagian">
                                        <option selected disabled>Sila pilih:</option>
                                        @foreach ($bahagian as $data)
                                            <option value="{{ $data->id }}">{{ $data->nama_bhgn }}
                                                ({{ $data->sgktn_bhgn }})</option>
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
                            <div class="d-grid spinner-hide"><button type="submit" class="fw-500 btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection

@section('js')
    <script>
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
