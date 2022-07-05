@extends('layouts.appDash')

@section('css')
@endsection

@section('icon', 'plus-square')
@section('tajuk', 'Info Pengguna')
@section('button')
    <a class="btn btn-sm btn-light text-primary" href="{{ route('pengguna.index') }}">
        <i class="me-1" data-feather="arrow-left"></i>
        Kembali Senarai
    </a>
@endsection

@section('content')
    @include('layouts.template.header_compact')
    <div class="container-fluid px-4 mt-4">
        <div class="row gx-4">
            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card card-header-actions">
                        <div class="card-header">
                            Maklumat Pengguna
                            <i class="text-muted" data-feather="info" data-bs-toggle="tooltip" data-bs-placement="left"
                                title="input yang perlu diisi"></i>
                        </div>
                        <div class="card-body">
                            <!-- Form Group (first name)-->
                            <div class="mb-3">
                                <h3>{{ $user->name }}</h3>
                                <label class="small mb-1" for="inputEmel">{{ $user->email }}</label>
                                <hr>
                                <p class="mb-1">{{ $user->nama_bhgn }} ({{ $user->sgktn_bhgn }})</p>
                                <div class="d-flex">
                                    <p class="me-2 px-1 bg-primary text-white">Peranan: </p>
                                    <p> {{ $user->peranan }}</p>
                                </div>

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
                        <form action="{{ route('pengguna.destroy', $user->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <div class="d-grid gap-2">
                                @if (Auth::user()->peranan == 1)
                                    <a class="fw-500 btn btn-primary mx-1" href="{{ route('pengguna.edit', $user->id) }}">
                                        <i data-feather="edit"></i> Edit
                                    </a>

                                    <button type="submit" class="fw-500 btn btn-danger mx-1">
                                        <i data-feather="trash-2"></i> Padam
                                    </button>
                                @endif
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('js')
@endsection
