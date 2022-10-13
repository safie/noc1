<!-- Modal -->
<div class="modal fade" id="senaraiKlasifikasiNoc" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
    aria-labelledby="SenaraiKlasifikasiNoc" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Jumlah NOC Mengikut Klasifikasi</h5>
                <button class="btn-close" data-bs-dismiss="modal" type="button" aria-label="Close"></button>
            </div>
            <div class="modal-body small">
                <table class="table table-sm table-striped table-hover mx-0 my-0 rounded rounded-3 overflow-hidden">
                    @if ($nocKlasifikasiAll->count() > 0)
                        @foreach ($nocKlasifikasiAll as $data)
                            <tr style="height: 50px">
                                <td class="align-middle px-2 py-2 text-center text-white bg-black" style="height: 100%">
                                    {{ $data->kod }}
                                </td>
                                <td class="text-wrap small align-middle px-2 py-2" style="width: 20rem; height: 100%">
                                    {{ $data->nama_kat }}
                                </td>
                                <td class="align-middle bg-primary text-center text-white px-2 py-2"
                                    style="width: 5rem;--bs-bg-opacity: .75;height: 100%">
                                    <strong>{{ $data->jumlah }}</strong>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <div class="text-center">
                            <p class="align-middle" style="height: 100%">Tiada NOC</p>
                        </div>
                    @endif

                </table>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
                {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="senaraiStatusNoc" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
    aria-labelledby="SenaraiStatusNoc" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Jumlah NOC Mengikut Status</h5>
                <button class="btn-close" data-bs-dismiss="modal" type="button" aria-label="Close"></button>
            </div>
            <div class="modal-body small">
                <table class="table table-sm table-striped table-hover mx-0 my-0 rounded rounded-3 overflow-hidden">
                    @if ($nocStatusAll->count() > 0)
                        @foreach ($nocStatusAll as $data)
                            <tr style="height: 50px">
                                <td class="text-wrap align-middle px-3 py-3" style="width: 20rem">
                                    {{ $data->nama_status }}
                                </td>
                                <td class="align-middle bg-warning text-center text-white px-3 py-3"
                                    style="width: 5rem;--bs-bg-opacity: .75;">
                                    <strong>{{ $data->jumlah }}</strong>
                                </td>

                            </tr>
                        @endforeach
                    @else
                        <div class="text-center">
                            <p class="align-middle" style="height: 100%">Tiada NOC</p>
                        </div>
                    @endif
                </table>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
                {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="senaraiKementerian" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
    aria-labelledby="SenaraiKementerian" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Jumlah NOC Mengikut Kementerian</h5>
                <button class="btn-close" data-bs-dismiss="modal" type="button" aria-label="Close"></button>
            </div>
            <div class="modal-body small">
                <table class="table table-sm table-striped table-hover mx-0 my-0 rounded rounded-3 overflow-hidden">
                    @if ($nocJabatanAll->count() > 0)
                        @foreach ($nocJabatanAll as $data)
                            <tr style="height: 50px">
                                {{-- <td>{{ $data->id }}</td> --}}
                                <td class="text-wrap align-middle px-3 py-3" style="width: 40rem">
                                    {{ $data->nama_jabatan }}
                                </td>
                                <td class="align-middle bg-success text-center text-white px-3 py-3"
                                    style="width: 5rem;--bs-bg-opacity: .75;">
                                    <strong>{{ $data->jumlah }}</strong>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <div class="text-center">
                            <p class="align-middle" style="height: 100%">Tiada NOC</p>
                        </div>
                    @endif
                </table>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
                {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
            </div>
        </div>
    </div>
</div>
