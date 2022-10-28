@extends('layouts.appDash')

@section('css')
    <style>
        .size-18 {
            width: 16px;
            height: 16px;
        }

        .size-28 {
            width: 24px;
            height: 24px;
        }

        .size-38 {
            width: 38px;
            height: 38px;
        }

        .size-48 {
            width: 48px;
            height: 48px;
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
    <div class="container-fluid px-2">
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show px-2 py-2" role="alert">
                <button class="btn-close" data-bs-dismiss="alert" type="button" aria-label="Close"></button>
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="card">
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th class="text-center">No.</th>
                            <th class="text-center">Tajuk Permohonan</th>
                            <th class="text-center">Kementerian</th>
                            <th class="text-center">Bahagian</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Tindakan</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th class="text-center">No.</th>
                            <th class="text-center">Tajuk Permohonan</th>
                            <th class="text-center">Kementerian</th>
                            <th class="text-center">Bahagian</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Tindakan</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @if ($noc->count() > 0)
                            @foreach ($noc as $data)
                                <tr>
                                    <td class="text-center align-middle">{{ $loop->index + 1 }}</td>
                                    <td style="width:40em">
                                        <div class="text-uppercase">
                                            <span class="badge bg-primary"><small>{{ $data->kod }}</small></span> {{ $data->nama_kat }}<br>
                                            <h5>{{ $data->tajuk_permohonan }}</h5>
                                        </div>

                                        <small class="text-muted"> Tarikh submit:
                                            {{ \Carbon\Carbon::parse($data->tarikh_permohonan)->format('j F, Y') }}</small>
                                    </td>

                                    <td class="align-middle" style="width:20em">{{ $data->nama_jabatan }}</td>
                                    <td class="text-center align-middle" style="width:10em">{{ $data->sgktn_bhgn }}</td>
                                    <td class="text-center align-middle" style="width:10em">
                                        <h5><span class="badge bg-secondary text-wrap">{!! $data->nama_status1 !!}</span>
                                        </h5>
                                        <h5 @if ($data->tarikh_hantar_surat_lulus != null) hidden @endif>
                                            <span class="badge bg-secondary text-wrap">{!! $data->nama_status2 !!}</span>
                                        </h5>
                                    </td>
                                    <td class="text-center align-middle">
                                        <div class="d-flex justify-content-center ">
                                            @if (Auth::user()->peranan == 1 or Auth::user()->peranan == 3)
                                                <a data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" class="btn btn-datatable btn-lg btn-icon btn-transparent-dark mx-1"
                                                    href="{{ route('noc.edit', $data->id) }}" >
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

                                                {{-- <form action="{{ route('noc.destroy', $data->id) }}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button
                                                        class="btn btn-datatable btn-lg btn-icon btn-transparent-dark mx-1 remove-data"
                                                        data-id="{{ $data->id }}">
                                                        <i class="size-28" data-feather="trash-2"></i>
                                                    </button>
                                                </form> --}}
                                            @endif
                                            <a class="btn btn-datatable btn-lg btn-icon btn-transparent-dark mx-1"
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
        feather.replace()

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
