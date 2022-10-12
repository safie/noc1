<!-- Modal -->
<div class="modal fade" id="senaraiKlasifikasiNoc" tabindex="-1" aria-labelledby="SenaraiKlasifikasiNoc" aria-hidden="true"
    data-bs-backdrop="static" data-bs-keyboard="false" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Jumlah NOC Mengikut Klasifikasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body small">
                <table class="table table-sm table-striped table-hover mx-0 my-0 rounded rounded-3 overflow-hidden">
                    @if ($nocKlasifikasiAll->count() > 0)
                        @foreach ($nocKlasifikasiAll as $data)
                            <tr style="height: 25px">
                                <td style="width: 1rem;--bs-bg-opacity: .75;height: 100%"
                                    class="align-middle text-center text-white bg-black px-3 py-3">
                                    {{ $data->kod }}
                                </td>
                                <td style="width: 20rem; height: 100%" class="text-wrap align-middle px-3 py-3">
                                    {{ $data->nama_kat }}
                                </td>
                                <td style="width: 3rem;--bs-bg-opacity: .75;height: 100%"
                                    class="align-middle bg-primary text-center text-white px-3 py-3">
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
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="senaraiStatusNoc" tabindex="-1" aria-labelledby="SenaraiStatusNoc" aria-hidden="true"
    data-bs-backdrop="static" data-bs-keyboard="false" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Jumlah NOC Mengikut Status</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body small">
                <table class="table table-sm table-striped table-hover mx-0 my-0 rounded rounded-3 overflow-hidden">
                    @if ($nocStatusAll->count() > 0)
                        @foreach ($nocStatusAll as $data)
                            <tr style="height: 25px">
                                <td style="width: 20rem" class="text-wrap align-middle px-3 py-3">
                                    {{ $data->nama_status }}
                                </td>
                                <td style="width: 5rem;--bs-bg-opacity: .75;"
                                    class="align-middle bg-warning text-center text-white px-3 py-3">
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
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="senaraiKementerian" tabindex="-1" aria-labelledby="SenaraiKementerian" aria-hidden="true"
    data-bs-backdrop="static" data-bs-keyboard="false" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Jumlah NOC Mengikut Kementerian</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body small">
                <table class="table table-sm table-striped table-hover mx-0 my-0 rounded rounded-3 overflow-hidden">
                    @if ($nocJabatanAll->count() > 0)
                        @foreach ($nocJabatanAll as $data)
                            <tr style="height: 25px">
                                {{-- <td>{{ $data->id }}</td> --}}
                                <td style="width: 40rem" class="text-wrap align-middle px-3 py-3">
                                    {{ $data->nama_jabatan }}
                                </td>
                                <td style="width: 5rem;--bs-bg-opacity: .75;"
                                    class="align-middle bg-success text-center text-white px-3 py-3">
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
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
            </div>
        </div>
    </div>
</div>
