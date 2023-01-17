@extends('layouts.appDash')

@section('css')

@endsection

@section('icon', 'briefcase')
@section('tajuk', 'Senarai Status')
@section('button')
    <a class="btn btn-sm btn-light text-primary" href="{{ route('status.create') }}">
        <i class="me-1" data-feather="user-plus"></i>
        Tambah Status NOC
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
                <table class="table table-bordered mb-2 small">
                    <thead>
                        <tr class="text-center">
                            <th>No.</th>
                            <th>ID Status</th>
                            <th>Nama Status</th>
                            <th>Tindakan</th>
                        </tr>
                    </thead>
                    {{-- <tfoot>
                        <tr class="text-center">
                            <th>No.</th>
                            <th>ID Status</th>
                            <th>Nama Status</th>
                            <th>Tindakan</th>
                        </tr>
                    </tfoot> --}}
                    <tbody>
                        @if ($status->count() > 0)
                            @foreach ($status as $index => $data)
                                <tr>
                                    <td>{{ $index + $status->firstItem() }}.</td>
                                    <td>{{ $data->id_status }}</td>
                                    <td>{!! $data->nama_status !!}</td>
                                    <td class="text-center">
                                        <form action="{{ route('status.destroy', $data->id) }}" method="POST">
                                            <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                                href="{{ route('status.edit', $data->id) }}"><i data-feather="edit"></i></a>
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
                    {!! $status->links() !!}
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="{{ asset('sb-admin-pro/dist/js/datatables/datatables-simple-demo.js') }}"></script>
@endsection
