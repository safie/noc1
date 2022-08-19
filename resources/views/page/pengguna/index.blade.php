@extends('layouts.appDash')

@section('css')

@endsection

@section('icon', 'briefcase')
@section('tajuk', 'Senarai Pengguna')
@section('button')
    <a class="btn btn-sm btn-light text-primary" href="{{ route('pengguna.create') }}">
        <i class="me-1" data-feather="user-plus"></i>
        Tambah Pengguna
    </a>
@endsection

@section('content')
    @include('layouts.template.header_compact')
    <div class="container-fluid px-4">
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert" aria-label="Close">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="card">
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Emel</th>
                            <th>Peranan</th>
                            <th>Bahagian</th>
                            <th class="text-center">Tindakan</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Emel</th>
                            <th>Peranan</th>
                            <th>Bahagian</th>
                            <th class="text-center">Tindakan</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @if ($pengguna->count() > 0)
                            @foreach ($pengguna as $key => $data)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->email }}</td>
                                    <td>{{ $data->getperanan->peranan ?? '' }}</td>
                                    <td>{{ $data->getbahagian->nama_bhgn ?? '' }}</td>
                                    <td class="d-flex justify-content-center">
                                        <a class="btn btn-datatable btn-icon btn-transparent-dark mx-1"
                                            href="{{ route('pengguna.show', $data->id) }}">
                                            <i data-feather="eye">Info</i>
                                        </a>
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
                {{-- {!! $peranan->links() !!} --}}
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="{{ asset('sb-admin-pro/dist/js/datatables/datatables-simple-demo.js') }}"></script>
@endsection
