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
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="card">
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th class="text-center">No.</th>
                            <th>Tajuk Permohonan</th>
                            <th>Kementerian</th>
                            <th>Bahagian</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Tindakan</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th class="text-center">No.</th>
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
                                    <td class="text-center">{{ $loop->index + 1 }}</td>
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
                                        <h4><span class="badge bg-secondary text-wrap">{{ $data->nama_status1 }}</span>
                                        </h4>

                                        <h4><span  @if ($data->tarikh_sedia_memo_kelulusan != null) hidden @endif class="badge bg-secondary text-wrap">{{ $data->nama_status2 }}</span>
                                        </h4>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center">

                                            @if ($data->status_noc == 'noc_1')
                                                <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"
                                                    href="{{ route('noc.edit', $data->id) }}">
                                                    <i data-feather="edit"></i></a>
                                                <form action="{{ route('noc.destroy', $data->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="btn btn-datatable btn-icon btn-transparent-dark show_confirm"><i
                                                            data-feather="trash-2"></i></button>
                                                </form>

                                                <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                                    href="{{ route('noc.detail', $data->id) }}"><i
                                                        data-feather="arrow-right-circle"></i></a>
                                            @else
                                                <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"
                                                    href="{{ route('noc.edit', $data->id) }}">
                                                    <i data-feather="edit"></i></a>

                                                <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                                    href="{{ route('noc.detail', $data->id) }}"><i
                                                        data-feather="arrow-right-circle"></i></a>
                                            @endif
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
