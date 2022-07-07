<div class="card card-header-actions mb-2">
    <div class="card-header">
        Status NOC
        <i class="text-muted" data-feather="info" data-bs-toggle="tooltip" data-bs-placement="left"
            title="Sejarah Status NOC"></i>
    </div>
    <div class="card-body">
        <div class="mb-4">
            <table class="table table-sm table-striped table-borderless table-hover mx-0 my-0 small">
                @if ($noc->status_noc == 'noc_1' or $noc->tarikh_submit != null)
                    <tr>
                        <td class="text-center">
                            {{ \Carbon\Carbon::parse($noc->tarikh_submit)->format('d-M-Y') }}</td>
                        <td class="bg-primary text-white" style="--bs-bg-opacity: .90;">NOC Submit</td>
                    </tr>
                @endif
                @if ($noc->status_noc == 'noc_1' or $noc->tarikh_submit != null)
                    <tr>
                        <td class="text-center">{{ \Carbon\Carbon::parse($noc->tarikh_semak)->format('d-M-Y') }}</td>
                        <td class="bg-primary text-white" style="--bs-bg-opacity: .90;">Semakan Bahagian (LULUS)</td>
                    </tr>
                @endif
                @if ($noc->status_noc == 'noc_1' or $noc->tarikh_submit != null)
                    <tr>
                        <td class="text-center">
                            {{ \Carbon\Carbon::parse($noc->tarikh_mohon_ulasan)->format('d-M-Y') }}</td>
                        <td class="bg-danger text-white" style="--bs-bg-opacity: .90;">Dokumen Tambahan</td>
                    </tr>
                @endif
                @if ($noc->status_noc == 'noc_1' or $noc->tarikh_submit != null)
                    <tr>
                        <td class="text-center">
                            {{ \Carbon\Carbon::parse($noc->tarikh_mohon_ulasan)->format('d-M-Y') }}</td>
                        <td class="bg-warning text-white" style="--bs-bg-opacity: .90;">Permohonan Ulasan Bajet</td>
                    </tr>
                @endif
                @if ($noc->status_noc == 'noc_1' or $noc->tarikh_submit != null)
                    <tr>
                        <td class="text-center">
                            {{ \Carbon\Carbon::parse($noc->tarikh_mohon_ulasan)->format('d-M-Y') }}</td>
                        <td class="bg-info text-white" style="--bs-bg-opacity: .90;">Permohonan Ulasan Teknikal</td>
                    </tr>
                @endif
                @if ($noc->status_noc == 'noc_1' or $noc->tarikh_submit != null)
                    <tr>
                        <td class="text-center">
                            {{ \Carbon\Carbon::parse($noc->tarikh_mohon_ulasan)->format('d-M-Y') }}</td>
                        <td class="bg-warning text-white" style="--bs-bg-opacity: .90;">Semakan BBP</td>
                    </tr>
                @endif
                @if ($noc->status_noc == 'noc_1' or $noc->tarikh_submit != null)
                    <tr>
                        <td class="text-center">
                            {{ \Carbon\Carbon::parse($noc->tarikh_mohon_ulasan)->format('d-M-Y') }}</td>
                        <td class="bg-info text-white" style="--bs-bg-opacity: .90;">Semakan BPN</td>
                    </tr>
                @endif
                @if ($noc->status_noc == 'noc_1' or $noc->tarikh_submit != null)
                    <tr>
                        <td class="text-center">
                            {{ \Carbon\Carbon::parse($noc->tarikh_mohon_ulasan)->format('d-M-Y') }}</td>
                        <td class="bg-danger text-white" style="--bs-bg-opacity: .90;">Dokumen Tambahan Bajet</td>
                    </tr>
                @endif
                @if ($noc->status_noc == 'noc_1' or $noc->tarikh_submit != null)
                    <tr>
                        <td class="text-center">
                            {{ \Carbon\Carbon::parse($noc->tarikh_mohon_ulasan)->format('d-M-Y') }}</td>
                        <td class="bg-danger text-white" style="--bs-bg-opacity: .90;">Dokumen Tambahan Teknikal</td>
                    </tr>
                @endif
                @if ($noc->status_noc == 'noc_1' or $noc->tarikh_submit != null)
                    <tr>
                        <td class="text-center">
                            {{ \Carbon\Carbon::parse($noc->tarikh_mohon_ulasan)->format('d-M-Y') }}</td>
                        <td class="bg-warning text-white" style="--bs-bg-opacity: .90;">Penyediaan Ulasan Bajet</td>
                    </tr>
                @endif
                @if ($noc->status_noc == 'noc_1' or $noc->tarikh_submit != null)
                    <tr>
                        <td class="text-center">
                            {{ \Carbon\Carbon::parse($noc->tarikh_mohon_ulasan)->format('d-M-Y') }}</td>
                        <td class="bg-info text-white" style="--bs-bg-opacity: .90;">Penyediaan Ulasan Teknikal</td>
                    </tr>
                @endif
                @if ($noc->status_noc == 'noc_1' or $noc->tarikh_submit != null)
                    <tr>
                        <td class="text-center">
                            {{ \Carbon\Carbon::parse($noc->tarikh_mohon_ulasan)->format('d-M-Y') }}</td>
                        <td class="bg-warning text-white" style="--bs-bg-opacity: .90;">Pengemukaan Ulasan Bajet</td>
                    </tr>
                @endif
                @if ($noc->status_noc == 'noc_1' or $noc->tarikh_submit != null)
                    <tr>
                        <td class="text-center">
                            {{ \Carbon\Carbon::parse($noc->tarikh_mohon_ulasan)->format('d-M-Y') }}</td>
                        <td class="bg-info text-white" style="--bs-bg-opacity: .90;">Pengemukaan Ulasan Teknikal</td>
                    </tr>
                @endif
                @if ($noc->status_noc == 'noc_1' or $noc->tarikh_submit != null)
                    <tr>
                        <td class="text-center">
                            {{ \Carbon\Carbon::parse($noc->tarikh_mohon_ulasan)->format('d-M-Y') }}</td>
                        <td class="bg-primary text-white" style="--bs-bg-opacity: .90;">Penyediaan Memo</td>
                    </tr>
                @endif
                @if ($noc->status_noc == 'noc_1' or $noc->tarikh_submit != null)
                    <tr>
                        <td class="text-center">
                            {{ \Carbon\Carbon::parse($noc->tarikh_mohon_ulasan)->format('d-M-Y') }}</td>
                        <td class="bg-primary text-white" style="--bs-bg-opacity: .90;">Penghantaran Memo</td>
                    </tr>
                @endif
                @if ($noc->status_noc == 'noc_1' or $noc->tarikh_submit != null)
                    <tr>
                        <td class="text-center">
                            {{ \Carbon\Carbon::parse($noc->tarikh_mohon_ulasan)->format('d-M-Y') }}</td>
                        <td class="bg-primary text-white" style="--bs-bg-opacity: .90;">Terima Memo</td>
                    </tr>
                @endif
                @if ($noc->status_noc == 'noc_1' or $noc->tarikh_submit != null)
                    <tr>
                        <td class="text-center">
                            {{ \Carbon\Carbon::parse($noc->tarikh_mohon_ulasan)->format('d-M-Y') }}</td>
                        <td class="bg-primary text-white" style="--bs-bg-opacity: .90;">Penyediaan Surat</td>
                    </tr>
                @endif
                @if ($noc->status_noc == 'noc_1' or $noc->tarikh_submit != null)
                    <tr>
                        <td class="text-center">
                            {{ \Carbon\Carbon::parse($noc->tarikh_mohon_ulasan)->format('d-M-Y') }}</td>
                        <td class="bg-primary text-white" style="--bs-bg-opacity: .90;">Penghantaran Surat</td>
                    </tr>
                @endif
                @if ($noc->status_noc == 'noc_1' or $noc->tarikh_submit != null)
                    <tr>
                        <td class="text-center">
                            {{ \Carbon\Carbon::parse($noc->tarikh_mohon_ulasan)->format('d-M-Y') }}</td>
                        <td class="bg-primary text-white" style="--bs-bg-opacity: .90;">Mohon Modul NOC</td>
                    </tr>
                @endif
            </table>
            {{-- <ol class="list-group list-group-flush">

                @if ($noc->status_noc == 'noc_1' or $noc->tarikh_submit != null)
                    <li class="list-group-item d-flex justify-content-start">
                        <div class="small ms-3">
                            {{ \Carbon\Carbon::parse($noc->tarikh_submit)->format('d-m-Y') }}</div>
                        <div class="small ms-1 w-50"><span class="badge bg-secondary text-wrap"
                                style="text-align: left">NOC Baharu</span>
                        </div>
                    </li>
                @endif

                @if ($noc->status_noc == 'noc_2')
                    <li class="list-group-item d-flex justify-content-start">
                        <div class="small ms-3">
                            {{ \Carbon\Carbon::parse($noc->tarikh_semak)->format('d-m-Y') }}</div>
                        <div class="small ms-1 w-50"><span class="badge bg-secondary text-wrap"
                                style="text-align: left">Lulus Semakan Bahagian</span>
                        </div>
                    </li>
                @endif

                @if ($noc->status_noc == 'noc_13')
                    <li class="list-group-item d-flex justify-content-start">
                        <div class="small ms-3">
                            {{ \Carbon\Carbon::parse($noc->tarikh_semak)->format('d-m-Y') }}</div>
                        <div class="small ms-1 w-50"><span class="badge bg-danger text-wrap"
                                style="text-align: left">Perlu Dokumen Tambahan</span>
                        </div>
                    </li>
                @endif

                @if ($noc->status_noc == 'noc_3')
                    <li class="list-group-item d-flex justify-content-start">
                        <div class="small ms-3">
                            {{ \Carbon\Carbon::parse($noc->tarikh_mohon_ulasan)->format('d-m-Y') }}</div>
                        <div class="small ms-1 w-50"><span class="badge bg-secondary text-wrap"
                                style="text-align: left">Permohonan Ulasan Bajet/ Teknikal</span>
                        </div>
                    </li>
                @endif

                @if ($noc->status_noc == 'noc_14')
                    <li class="list-group-item d-flex justify-content-start">
                        <div class="small ms-3 ">
                            {{ \Carbon\Carbon::parse($noc->tarikh_semak)->format('d-m-Y') }}</div>
                        <div class="small ms-1 w-50"><span class="badge bg-secondary text-wrap"
                                style="text-align: left">Perlu maklumat tambahan</span>
                        </div>
                    </li>
                @endif

                @if ($noc->status_noc == 'noc_4')
                    <li class="list-group-item d-flex justify-content-start">
                        <div class="small ms-3">
                            {{ \Carbon\Carbon::parse($noc->tarikh_sedia_ulasan)->format('d-m-Y') }}</div>
                        <div class="small ms-1 w-50"><span class="badge bg-secondary text-wrap"
                                style="text-align: left">Semakan BBP/BPN</span>
                        </div>
                    </li>
                @endif

                @if ($noc->status_noc == 'noc_5')
                    <li class="list-group-item d-flex justify-content-start">
                        <div class="small ms-3">
                            {{ \Carbon\Carbon::parse($noc->tarikh_hantar_ulasan)->format('d-m-Y') }}</div>
                        <div class="small ms-1 w-50"><span class="badge bg-secondary text-wrap"
                                style="text-align: left">Penyediaan Ulasan Bajet/ Teknikal</span>
                        </div>
                    </li>
                @endif

                @if ($noc->status_noc == 'noc_6')
                    <li class="list-group-item d-flex justify-content-start">
                        <div class="small ms-3">
                            {{ \Carbon\Carbon::parse($noc->tarikh_sedia_memo_kelulusan)->format('d-m-Y') }}
                        </div>
                        <div class="small ms-1 w-50"><span class="badge bg-secondary text-wrap"
                                style="text-align: left">Pengemukaan Ulasan Bajet/Teknikal</span></div>
                    </li>
                @endif

                @if ($noc->status_noc == 'noc_7')
                    <li class="list-group-item d-flex justify-content-start">
                        <div class="small ms-3 ">
                            {{ \Carbon\Carbon::parse($noc->tarikh_kelulusan_pt)->format('d-m-Y') }}
                        </div>
                        <div class="small ms-1 w-50"><span class="badge bg-secondary text-wrap"
                                style="text-align: left">Terima Memo Kelulusan
                                {{ $noc->pengurusan_tinggi }}</span>
                        </div>
                    </li>
                @endif

                @if ($noc->status_noc == 'noc_8')
                    <li class="list-group-item d-flex justify-content-start">
                        <div class="small ms-3">
                            {{ \Carbon\Carbon::parse($noc->tarikh_sedia_surat)->format('d-m-Y') }}</div>
                        <div class="small ms-1 w-50"><span class="badge bg-secondary text-wrap"
                                style="text-align: left">Penyediaan Surat
                                Kelulusan</span></div>
                    </li>
                @endif

                @if ($noc->status_noc == 'noc_9')
                    <li class="list-group-item d-flex justify-content-start">
                        <div class="small ms-3">
                            {{ \Carbon\Carbon::parse($noc->tarikh_hantar_surat_lulus)->format('d-m-Y') }}
                        </div>
                        <div class="small ms-1 w-50"><span class="small badge bg-secondary text-wrap"
                                style="text-align: left">Terima Surat Kelulusan Rasmi</span></div>
                    </li>
                @endif

                @if ($noc->tarikh_mohon_modul != null)
                    <li class="list-group-item d-flex justify-content-start">
                        <div class="small ms-3">
                            {{ \Carbon\Carbon::parse($noc->tarikh_mohon_modul)->format('d-m-Y') }}</div>
                        <div class="small ms-1 w-50"><span class="badge bg-secondary text-wrap"
                                style="text-align: left">Modul NOC MyProjek</span>
                        </div>
                    </li>
                @endif
            </ol> --}}
        </div>
    </div>
</div>
