@extends('layouts.appDash')

@section('css')
    {{-- <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet"> --}}
@endsection

@section('icon', 'briefcase')
@section('tajuk', 'Senarai Bahagian')
@section('button')
    <a class="btn btn-sm btn-light text-primary" href="{{ route('projek.create') }}">
        <i class="me-1" data-feather="user-plus"></i>
        Tambah Projek
    </a>
@endsection

@section('content')
    @include('layouts.template.header_compact')
    <div class="container-fluid px-4">
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered mb-2">
                    <thead>
                        <tr class="text-center align-middle">
                            <th>No.</th>
                            <th>Kod Projek<br>Kementerian</th>
                            <th style="width:50%">Nama Projek</th>
                            <th style="width:20%">Kos/Siling</th>
                            <th>Tindakan</th>
                        </tr>
                    </thead>
                    {{-- <tfoot>
                        <tr>
                            <th>No.</th>
                            <th>Nama Projek</th>
                            <th>Kod Projek</th>
                            <th>Kementerian</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot> --}}
                    <tbody>
                        @if ($projek->count() > 0)
                            @foreach ($projek as $index => $data)
                                <tr>
                                    <td>{{ $index + $projek->firstItem() }}</td>
                                    <td>{{ $data->kod_projek }} <br><b>{{ $data->getKementerian->nama_jabatan }}</b></td>
                                    <td>
                                        <p>{{ $data->nama_projek }}</p>
                                    </td>
                                    <td>
                                        <ul>
                                            <li>Kos keseluruhan:<br> <b>RM
                                                    {{ number_format($data->kos_keseluruhan, 2) }}</b></li>
                                            <li>Kos DE Asal:<br> <b>RM {{ number_format($data->kos_de_asal, 2) }}</b></li>
                                            <li>Kos DE Dipinda:<br> <b>RM {{ number_format($data->kos_de_dipinda, 2) }}</b>
                                            </li>
                                            <li>Siling Asal 2022:<br> <b>RM
                                                    {{ number_format($data->siling_asal_2022, 2) }}</b></;>
                                            <li>Siling Dipinda 2022:<br> <b>RM
                                                    {{ number_format($data->siling_dipinda_2022, 2) }}</b>
                                            </li>
                                        </ul>
                                    </td>
                                    <td class="text-center">
                                        <form action="{{ route('projek.destroy', $data->id) }}" method="POST">
                                            <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                                href="{{ route('projek.edit', $data->id) }}"><i
                                                    data-feather="edit"></i></a>
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark"
                                                type="submit"><i data-feather="trash-2"></i></button>
                                        </form>
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
    {{-- <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="{{ asset('sb-admin-pro/dist/js/datatables/datatables-simple-demo.js') }}"></script> --}}

@endsection
