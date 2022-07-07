<div class="card card-header-actions mb-2">
    <div class="card-header">
        Status NOC
        <i class="text-muted" data-feather="info" data-bs-toggle="tooltip" data-bs-placement="left"
            title="Sejarah Status NOC"></i>
    </div>
    <div class="card-body">
        <div class="mb-4">
            {{-- <table class="table table-sm table-striped table-hover mx-0 my-0 small">
                <tr class="text-center">
                    <td style="width: 150px" class="bg-primary"></td>
                    <td style="width: 150px;--bs-bg-opacity: 0.2;" class="bg-primary">Bahagian</td>
                    <td style="width: 150px" class="bg-warning"></td>
                    <td style="width: 150px;--bs-bg-opacity: 0.2;" class="bg-warning">BBP</td>
                    <td style="width: 150px" class="bg-info"></td>
                    <td style="width: 150px;--bs-bg-opacity: 0.2;" class="bg-info">BPN</td>
                </tr>
            </table>
            <br> --}}
            <table class="table table-sm table-striped table-hover mx-0 my-0 small">
                @if ($noc->status_noc == 'noc_1' or $noc->tarikh_submit != null)
                    <tr>
                        <td class="text-center">
                            {{ \Carbon\Carbon::parse($noc->tarikh_submit)->format('d-M-Y') }}</td>
                        <td class="bg-primary text-white align-middle" style="--bs-bg-opacity: .90;">NOC Submit</td>
                    </tr>
                @endif
                @if ($noc->status_noc == 'noc_17' or $noc->tarikh_dokumen_tambahan != null)
                    <tr>
                        <td class="text-center">
                            {{ \Carbon\Carbon::parse($noc->tarikh_dokumen_tambahan)->format('d-M-Y') }}</td>
                        <td class="bg-danger text-white align-middle" style="--bs-bg-opacity: .90;">Dokumen Tambahan</td>
                    </tr>
                @endif
                @if ($noc->status_noc == 'noc_2' or $noc->tarikh_semak != null)
                    <tr>
                        <td class="text-center">{{ \Carbon\Carbon::parse($noc->tarikh_semak)->format('d-M-Y') }}</td>
                        <td class="bg-primary text-white align-middle" style="--bs-bg-opacity: .90;">Semakan Bahagian (LULUS)</td>
                    </tr>
                @endif

                @if ($noc->status_noc == 'noc_3' or $noc->tarikh_mohon_ulasan != null)
                    <tr>
                        <td class="text-center">
                            {{ \Carbon\Carbon::parse($noc->tarikh_mohon_ulasan)->format('d-M-Y') }}</td>
                        <td class="bg-warning text-white align-middle" style="--bs-bg-opacity: .90;">Permohonan Ulasan Bajet</td>
                    </tr>
                @endif
                @if ($noc->status_noc == 'noc_4' or $noc->tarikn_mohon_ulasan_tek != null)
                    <tr>
                        <td class="text-center">
                            {{ \Carbon\Carbon::parse($noc->tarikn_mohon_ulasan_tek)->format('d-M-Y') }}</td>
                        <td class="bg-info text-white align-middle" style="--bs-bg-opacity: .90;">Permohonan Ulasan Teknikal</td>
                    </tr>
                @endif
                @if ($noc->status_noc == 'noc_5' or $noc->tarikh_semak_bajet != null)
                    <tr>
                        <td class="text-center">
                            {{ \Carbon\Carbon::parse($noc->tarikh_semak_bajet)->format('d-M-Y') }}</td>
                        <td class="bg-warning text-white align-middle" style="--bs-bg-opacity: .90;">Semakan BBP</td>
                    </tr>
                @endif
                @if ($noc->status_noc == 'noc_6' or $noc->tarikh_semak_tek != null)
                    <tr>
                        <td class="text-center">
                            {{ \Carbon\Carbon::parse($noc->tarikh_semak_tek)->format('d-M-Y') }}</td>
                        <td class="bg-info text-white align-middle" style="--bs-bg-opacity: .90;">Semakan BPN</td>
                    </tr>
                @endif
                @if ($noc->status_noc == 'noc_18' or $noc->tarikh_dokumen_tambahan_bajet != null)
                    <tr>
                        <td class="text-center">
                            {{ \Carbon\Carbon::parse($noc->tarikh_dokumen_tambahan_bajet)->format('d-M-Y') }}</td>
                        <td class="bg-danger text-white align-middle" style="--bs-bg-opacity: .90;">Dokumen Tambahan Bajet</td>
                    </tr>
                @endif
                @if ($noc->status_noc == 'noc_19' or $noc->tarikh_dokumen_tambahan_tek != null)
                    <tr>
                        <td class="text-center">
                            {{ \Carbon\Carbon::parse($noc->tarikh_dokumen_tambahan_tek)->format('d-M-Y') }}</td>
                        <td class="bg-danger text-white align-middle" style="--bs-bg-opacity: .90;">Dokumen Tambahan Teknikal</td>
                    </tr>
                @endif
                @if ($noc->status_noc == 'noc_7' or $noc->tarikh_sedia_ulasan != null)
                    <tr>
                        <td class="text-center">
                            {{ \Carbon\Carbon::parse($noc->tarikh_sedia_ulasan)->format('d-M-Y') }}</td>
                        <td class="bg-warning text-white align-middle" style="--bs-bg-opacity: .90;">Penyediaan Ulasan Bajet</td>
                    </tr>
                @endif
                @if ($noc->status_noc == 'noc_8' or $noc->tarikh_sedia_ulasan_tek != null)
                    <tr>
                        <td class="text-center">
                            {{ \Carbon\Carbon::parse($noc->tarikh_sedia_ulasan_tek)->format('d-M-Y') }}</td>
                        <td class="bg-info text-white align-middle" style="--bs-bg-opacity: .90;">Penyediaan Ulasan Teknikal</td>
                    </tr>
                @endif
                @if ($noc->status_noc == 'noc_9' or $noc->tarikh_hantar_ulasan != null)
                    <tr>
                        <td class="text-center">
                            {{ \Carbon\Carbon::parse($noc->tarikh_hantar_ulasan)->format('d-M-Y') }}</td>
                        <td class="bg-warning text-white align-middle" style="--bs-bg-opacity: .90;">Pengemukaan Ulasan Bajet</td>
                    </tr>
                @endif
                @if ($noc->status_noc == 'noc_10' or $noc->tarikh_hantar_ulasan_tek != null)
                    <tr>
                        <td class="text-center">
                            {{ \Carbon\Carbon::parse($noc->tarikh_hantar_ulasan_tek)->format('d-M-Y') }}</td>
                        <td class="bg-info text-white align-middle" style="--bs-bg-opacity: .90;">Pengemukaan Ulasan Teknikal</td>
                    </tr>
                @endif
                @if ($noc->status_noc == 'noc_11' or $noc->tarikh_sedia_memo_kelulusan != null)
                    <tr>
                        <td class="text-center">
                            {{ \Carbon\Carbon::parse($noc->tarikh_sedia_memo_kelulusan)->format('d-M-Y') }}</td>
                        <td class="bg-primary text-white align-middle" style="--bs-bg-opacity: .90;">Penyediaan Memo</td>
                    </tr>
                @endif
                @if ($noc->status_noc == 'noc_12' or $noc->tarikh_hantar_memo_kelulusan != null)
                    <tr>
                        <td class="text-center">
                            {{ \Carbon\Carbon::parse($noc->tarikh_hantar_memo_kelulusan)->format('d-M-Y') }}</td>
                        <td class="bg-primary text-white align-middle" style="--bs-bg-opacity: .90;">Penghantaran Memo</td>
                    </tr>
                @endif
                @if ($noc->status_noc == 'noc_13' or $noc->tarikh_kelulusan_pt != null)
                    <tr>
                        <td class="text-center">
                            {{ \Carbon\Carbon::parse($noc->tarikh_kelulusan_pt)->format('d-M-Y') }}</td>
                        <td class="bg-primary text-white align-middle" style="--bs-bg-opacity: .90;">Terima Memo</td>
                    </tr>
                @endif
                @if ($noc->status_noc == 'noc_14' or $noc->tarikh_sedia_surat != null)
                    <tr>
                        <td class="text-center">
                            {{ \Carbon\Carbon::parse($noc->tarikh_sedia_surat)->format('d-M-Y') }}</td>
                        <td class="bg-primary text-white align-middle" style="--bs-bg-opacity: .90;">Penyediaan Surat</td>
                    </tr>
                @endif
                @if ($noc->status_noc == 'noc_15' or $noc->tarikh_hantar_surat_lulus != null)
                    <tr>
                        <td class="text-center">
                            {{ \Carbon\Carbon::parse($noc->tarikh_hantar_surat_lulus)->format('d-M-Y') }}</td>
                        <td class="bg-primary text-white align-middle" style="--bs-bg-opacity: .90;">Penghantaran Surat</td>
                    </tr>
                @endif
                @if ($noc->status_noc == 'noc_16' or $noc->tarikh_mohon_modul != null)
                    <tr>
                        <td class="text-center">
                            {{ \Carbon\Carbon::parse($noc->tarikh_mohon_modul)->format('d-M-Y') }}</td>
                        <td class="bg-primary text-white align-middle" style="--bs-bg-opacity: .90;">Mohon Modul NOC</td>
                    </tr>
                @endif
            </table>
        </div>
    </div>
</div>
