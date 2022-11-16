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
                        <tr>
                            <th>No.</th>
                            <th>Kod Projek</th>
                            <th>Kementerian</th>
                            <th>Nama Projek</th>

                            <th>Actions</th>
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
                            @foreach ($projek as $data)
                                <tr>
                                    <td>{{ $data->id }}</td>
                                    <td>{{ $data->kod_projek }}</td>
                                    <td>{{ $data->getKementerian->nama_jabatan }}</td>
                                    <td>{{ $data->nama_projek }}</td>

                                    <td>
                                        <form action="{{ route('projek.destroy', $data->id) }}" method="POST">
                                            <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                                href="{{ route('projek.edit', $data->id) }}"><i data-feather="edit"></i></a>
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
