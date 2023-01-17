@extends('layouts.appDash')

@section('css')

@endsection

@section('icon', 'briefcase')
@section('tajuk', 'Senarai Peringkat')
@section('button')
    <a class="btn btn-sm btn-light text-primary" href="{{ route('peringkat.create') }}">
        <i class="me-1" data-feather="user-plus"></i>
        Tambah Peringkat
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
                        <tr>
                            <th>No.</th>
                            <th>Nama Peringkat</th>
                            <th>Order</th>
                            <th>Tindakan</th>
                        </tr>
                    </thead>
                    {{-- <tfoot>
                        <tr>
                            <th>No.</th>
                            <th>Nama Peringkat</th>
                            <th>Order</th>
                            <th>Tindakan</th>
                        </tr>
                    </tfoot> --}}
                    <tbody>
                        @if ($peringkat->count() > 0)
                            @foreach ($peringkat as $index => $data)
                                <tr>
                                    <td>{{ $index + $peringkat->firstItem() }}.</td>
                                    <td>{{ $data->nama_peringkat }}</td>
                                    <td>{{ $data->order }}</td>
                                    <td>
                                        <form action="{{ route('peringkat.destroy', $data->id) }}" method="POST">
                                            <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                                href="{{ route('peringkat.edit', $data->id) }}"><i
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
                    {!! $peringkat->links() !!}
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="{{ asset('sb-admin-pro/dist/js/datatables/datatables-simple-demo.js') }}"></script>
@endsection
