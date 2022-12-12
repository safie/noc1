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
                <button class="btn-close" data-bs-dismiss="alert" type="button" aria-label="Close"></button>
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered mb-2 small">
                    <thead>
                        <tr>
                            <th class="text-center">No.</th>
                            <th class="text-center">Tajuk Permohonan</th>
                            <th class="text-center">Bahagian</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($noc->count() > 0)
                            @foreach ($noc as $data)
                                <tr>
                                    <td class="text-center align-middle" style="width:5em">{{ $loop->index + 1 }}</td>
                                    <td style="width:40em">
                                        <div class="text-uppercase">
                                           <p class="bg-white">
                                                <mark class="px-2 py-1 bg-warning">{{ $data->getKategori->kod }}</mark>
                                                <mark
                                                    class="px-2 py-1 bg-primary text-white">{{ $data->getKategori->nama_kat }}</mark>
                                            </p>
                                            <p><b>{{ $data->getProjek->getKementerian->nama_jabatan }}</b><br>{!! $data->getProjek->nama_projek !!}
                                            </p>
                                        </div>
                                        <p class="text-muted"> Tarikh submit:
                                            {{ \Carbon\Carbon::parse($data->tarikh_permohonan)->format('j F, Y') }}</p>
                                    </td>
                                    <td class="text-center align-middle" style="width:10em">
                                        {{ $data->getBahagian->nama_bhgn }} ({{ $data->getBahagian->sgktn_bhgn }})</td>
                                    <td class="text-center align-middle" style="width:10em">
                                        <h5><span class="badge bg-secondary text-wrap">{!! $data->getStatus1->nama_status !!}</span>
                                        </h5>
                                        <h5 @if ($data->tarikh_hantar_surat_lulus != null) hidden @endif>
                                            <span class="badge bg-secondary text-wrap">{!! $data->getStatus2->nama_status ?? '' !!}</span>
                                        </h5>
                                    </td>
                                    <td class="text-center align-middle" style="width:5em">
                                        <div class="d-flex justify-content-center">
                                            <a class="btn btn-datatable btn-lg btn-icon btn-transparent-dark mx-1"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                href="{{ route('noc.edit', $data->id) }}" title="Edit">
                                                <i data-feather="edit"></i></a>
                                            {{-- <form action="{{ route('noc.destroy', $data->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="btn btn-datatable btn-lg btn-icon btn-transparent-dark show_confirm"><i
                                                            data-feather="trash-2"></i></button>
                                                </form> --}}

                                            <a class="btn btn-datatable btn-lg btn-icon btn-transparent-dark mx-1"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                href="{{ route('noc.detail', $data->id) }}" title="Info"><i
                                                    data-feather="monitor">Info</i></a>
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
                {!! $noc->links() !!}
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
    <script type="text/javascript">
        $('.show_confirm').click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                    title: 'Anda pasti?',
                    text: "If you delete this, it will be gone forever.",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })

                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    }
                });
        });
    </script>
@endsection
