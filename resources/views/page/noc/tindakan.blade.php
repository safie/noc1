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
                            <th>Kementerian</th>
                            <th>Bahagian</th>
                            <th>Status</th>
                            <th class="text-center">Tindakan</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No.</th>
                            <th>Tajuk Permohonan</th>
                            <th>Tarikh Permohonan</th>
                            <th>Kementerian</th>
                            <th>Bahagian</th>
                            <th>Status</th>
                            <th class="text-center">Tindakan</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @if ($noc->count() > 0)
                            @foreach ($noc as $data)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $data->tajuk_permohonan }}</td>
                                    <td>{{ \Carbon\Carbon::parse($data->tarikh_permohonan)->format('j F, Y') }}</td>
                                    <td>{{ $data->nama_jabatan }}</td>
                                    <td>{{ $data->sgktn_bhgn }}</td>
                                    <td>
                                        <h4><span class="badge bg-secondary">{{ $data->nama_status }}</span></h4>
                                    </td>
                                    <td class="d-flex justify-content-center">
                                        @if ($data->status_noc == 'noc_1')
                                            <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"
                                                href="{{ route('noc.edit', $data->id) }}">
                                                <i data-feather="edit"></i></a>

                                            <form action="{{ route('noc.destroy', $data->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="btn btn-datatable btn-icon btn-transparent-dark"><i
                                                        data-feather="trash-2"></i></button>
                                            </form>
                                            <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                                href="{{ route('noc.detail', $data->id) }}"><i data-feather="eye"></i></a>
                                        @else
                                            <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                                href="{{ route('noc.detail', $data->id) }}"><i
                                                    data-feather="eye"></i></a>
                                        @endif
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"></script>
    <script>
        const button = document.querySelector('#button');
        const tooltip = document.querySelector('#tooltip');

        // Pass the button, the tooltip, and some options, and Popper will do the
        // magic positioning for you:
        Popper.createPopper(button, tooltip, {
            placement: 'right',
        });
    </script>
@endsection
