@extends('layouts.appDash')

@section('css')
    <style>
        .feather-16 {
            width: 16px;
            height: 16px;
        }

        .feather-24 {
            width: 24px;
            height: 24px;
        }

        .feather-32 {
            width: 32px;
            height: 32px;
        }
    </style>

@endsection

@section('icon', 'briefcase')
@section('tajuk', 'Senarai NOC')
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

                            <th>Kementerian</th>
                            <th>Bahagian</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Tindakan</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No.</th>
                            <th>Tajuk Permohonan</th>

                            <th>Kementerian</th>
                            <th>Bahagian</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Tindakan</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @if ($noc->count() > 0)
                            @foreach ($noc as $data)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td class="text-uppercase" style="width: 25em">{{ $data->tajuk_permohonan }}<br>
                                        <strong>{{ \Carbon\Carbon::parse($data->tarikh_permohonan)->format('d M, Y') }}</strong>
                                    </td>

                                    <td>{{ $data->nama_jabatan }}</td>
                                    <td>{{ $data->sgktn_bhgn }}</td>
                                    <td class="text-center">
                                        <h5><span class="badge bg-secondary text-wrap">{{ $data->nama_status }}</span>
                                        </h5>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center">
                                            @if (Auth::user()->peranan == 1 or Auth::user()->peranan == 3)
                                                <a class="btn btn-datatable btn-icon btn-transparent-dark mx-1"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"
                                                    href="{{ route('noc.edit', $data->id) }}">
                                                    <i data-feather="edit"></i>
                                                </a>

                                                <form action="{{ route('noc.destroy', $data->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="btn btn-datatable btn-icon btn-transparent-dark mx-1">
                                                        <i data-feather="trash-2">Padam</i>
                                                    </button>
                                                </form>
                                            @endif
                                            <a class="btn btn-datatable btn-icon btn-transparent-dark mx-1"
                                                href="{{ route('noc.detail', $data->id) }}">
                                                <i data-feather="eye">Info</i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="7">Tiada maklumat!</td>
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
    <script>
        feather.replace()
    </script>

@endsection
