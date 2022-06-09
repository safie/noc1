@extends('layouts.appDash')

@section('css')

@endsection

@section('icon', 'briefcase')
@section('tajuk', 'Senarai Kategori')
@section('button')
    <a class="btn btn-sm btn-light text-primary" href="{{ route('kategori.create') }}">
        <i class="me-1" data-feather="user-plus"></i>
        Tambah Klasifikasi
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
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Klasifikasi</th>
                            <th>Kod Klasifikasi</th>
                            <th>Kod MyProjek</th>
                            <th class="text-center">Tindakan</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No.</th>
                            <th>Nama kategori</th>
                            <th>Kod Kategori</th>
                            <th>Kod MyProjek</th>
                            <th class="text-center">Tindakan</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @if ($kategori->count() > 0)
                            @foreach ($kategori as $data)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $data->nama_kat }}</td>
                                    <td>{{ $data->kod }}</td>
                                    <td>{{ $data->kod_myprojek }}</td>
                                    <td class="text-center">
                                        <form action="{{ route('kategori.destroy', $data->id) }}" method="POST">
                                            <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="input yang perlu diisi"
                                                href="{{ route('kategori.edit', $data->id) }}">
                                                <i data-feather="edit"></i>
                                            </a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-datatable btn-icon btn-transparent-dark"><i
                                                    data-feather="trash-2"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="5">Tiada maklumat!</td>
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
