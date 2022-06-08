@extends('layouts.appDash')

@section('css')

@endsection

@section('icon', 'briefcase')
@section('tajuk', 'NOC untuk tindakan anda')
@section('button')
    {{-- <a class="btn btn-sm btn-light text-primary" href="{{ route('noc.create') }}">
        <i class="me-1" data-feather="user-plus"></i>
        Tambah Kementerian/Jabatan
    </a> --}}
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
                            <th>Tajuk Permohonan</th>
                            <th>Tarikh Permohonan</th>
                            <th>Tarikh Surat</th>
                            <th>No Rujukan</th>
                            <th>Kementerian</th>
                            <th>Bahagian</th>
                            <th>Tindakan</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No.</th>
                            <th>Tajuk Permohonan</th>
                            <th>Tarikh Permohonan</th>
                            <th>Tarikh Surat</th>
                            <th>No Rujukan</th>
                            <th>Kementerian</th>
                            <th>Bahagian</th>
                            <th>Tindakan</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @if ($noc->count() > 0)
                            @foreach ($noc as $data)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $data->tajuk_permohonan }}</td>
                                    <td>{{ $data->tarikh_permohonan }}</td>
                                    <td>{{ $data->tarikh_surat_kementerian }}</td>
                                    <td>{{ $data->no_rujukan }}</td>
                                    <td>{{ $data->kementerian }}</td>
                                    <td>{{ $data->bahagian }}</td>
                                    <td>
                                        <form action="{{ route('noc.destroy', $data->id) }}" method="POST">
                                            <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                                href="{{ route('noc.edit', $data->id) }}"><i data-feather="edit"></i></a>
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
                                <td colspan="8">Tiada maklumat!</td>
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
