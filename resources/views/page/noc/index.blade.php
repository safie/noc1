@extends('layouts.appDash')

@section('css')

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
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
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
                                    <td style="width:40em">
                                        <div class="text-uppercase">
                                            <strong>({{ $data->klasifikasi }}) {{ $data->nama_kat }}</strong><br>
                                            {{ $data->tajuk_permohonan }}
                                        </div>

                                        <strong> Tarikh submit:
                                            {{ \Carbon\Carbon::parse($data->tarikh_permohonan)->format('j F, Y') }}</strong>
                                    </td>

                                    <td>{{ $data->nama_jabatan }}</td>
                                    <td>{{ $data->sgktn_bhgn }}</td>
                                    <td class="text-center">
                                        <h5><span class="badge bg-secondary text-wrap">{{ $data->nama_status1 }}</span>
                                        </h5>
                                        <h5 @if ($data->tarikh_sedia_memo_kelulusan != null) hidden @endif>
                                            <span class="badge bg-secondary text-wrap">{{ $data->nama_status2 }}</span>
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

                                                {{-- <a href="/noc/delete/{{ $data->id }}" id="delete-confirm"
                                                    class="btn btn-datatable btn-icon btn-transparent-dark mx-1 delete-confirm">
                                                    <i data-feather="trash-2"></i>
                                                </a> --}}

                                                {{-- <button
                                                    class="btn btn-datatable btn-icon btn-transparent-dark mx-1 remove-data"
                                                    data-id="{{ $data->id }}" type="button" data-bs-toggle="modal" data-bs-target="#modalDelete">
                                                    <i data-feather="trash-2"></i>
                                                </button> --}}

                                                <form action="{{ route('noc.destroy', $data->id) }}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button
                                                        class="btn btn-datatable btn-icon btn-transparent-dark mx-1 remove-data"
                                                        data-id="{{ $data->id }}">
                                                        <i data-feather="trash-2"></i>
                                                    </button>
                                                </form>
                                            @endif
                                            <a class="btn btn-datatable btn-icon btn-transparent-dark mx-1"
                                                href="{{ route('noc.detail', $data->id) }}">
                                                <i data-feather="monitor">Info</i>
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
        {{-- <div>
            @include('page.noc.import.modalDelete')
        </div> --}}
    </div>

@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="{{ asset('sb-admin-pro/dist/js/datatables/datatables-simple-demo.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>
        // feather.replace()

        // $('.delete-confirm').on('click', function(event) {
        //     event.preventDefault();
        //     const url = $(this).attr('href');
        //     swal({
        //         title: 'Anda pasti untuk padam?',
        //         text: 'Rekod NOC akan dipadam dan tidak dapat dikembalikan',
        //         icon: 'warning',
        //         buttons: ["Batal", "Ya!"],
        //     }).then(function(value) {
        //         if (value) {
        //             window.location.href = url;
        //         }
        //     });
        // });
    </script>
@endsection
