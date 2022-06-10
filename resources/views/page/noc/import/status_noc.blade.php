<div class="card card-header-actions mb-2">
    <div class="card-header">
        Status NOC
        <i class="text-muted" data-feather="info" data-bs-toggle="tooltip" data-bs-placement="left"
            title="Sejarah Status NOC"></i>
    </div>
    <div class="card-body">
        <div class="mb-4">
            <ol class="list-group list-group-flush">
                @if ($noc->tarikh_submit != null)
                    <li class="list-group-item d-flex justify-content-between">
                        <div class="ms-3">
                            {{ \Carbon\Carbon::parse($noc->tarikh_submit)->format('d-m-Y') }}</div>
                        <div class="ms-1 flex-grow-1"><span class="badge bg-secondary">NOC Baharu</span>
                        </div>
                    </li>
                @endif
                @if ($noc->status_noc == 'noc_10')
                    <li class="list-group-item d-flex justify-content-between">
                        <div class="ms-3 ">
                            {{ \Carbon\Carbon::parse($noc->tarikh_semak)->format('d-m-Y') }}</div>
                        <div class="ms-1 flex-grow-1"><span class="badge bg-danger">Semakan semula</span>
                        </div>
                    </li>
                @endif
                @if ($noc->tarikh_semak != null)
                    <li class="list-group-item d-flex justify-content-between">
                        <div class="ms-3 ">
                            {{ \Carbon\Carbon::parse($noc->tarikh_semak)->format('d-m-Y') }}</div>
                        <div class="ms-1 flex-grow-1"><span class="badge bg-secondary">Mohon Ulasan</span>
                        </div>
                    </li>
                @endif
                @if ($noc->tarikh_sedia_ulasan != null)
                    <li class="list-group-item d-flex justify-content-between">
                        <div class="ms-3 ">
                            {{ \Carbon\Carbon::parse($noc->tarikh_sedia_ulasan)->format('d-m-Y') }}</div>
                        <div class="ms-1 flex-grow-1"><span class="badge bg-secondary">Penyediaan Ulasan</span>
                        </div>
                    </li>
                @endif
                @if ($noc->tarikh_sedia_ulasan != null && $noc->status_noc == 'noc_11')
                    <li class="list-group-item d-flex justify-content-between">
                        <div class="ms-3 ">
                            {{ \Carbon\Carbon::parse($noc->tarikh_semak)->format('d-m-Y') }}</div>
                        <div class="ms-1 flex-grow-1"><span class="badge bg-secondary">Perlu maklumat tambahan</span>
                        </div>
                    </li>
                @endif
                @if ($noc->tarikh_hantar_ulasan != null)
                    <li class="list-group-item d-flex justify-content-between">
                        <div class="ms-3">
                            {{ \Carbon\Carbon::parse($noc->tarikh_hantar_ulasan)->format('d-m-Y') }}</div>
                        <div class="ms-1 flex-grow-1"><span class="badge bg-secondary">Ulasan dihantar</span>
                        </div>
                    </li>
                @endif
                @if ($noc->tarikh_sedia_memo_kelulusan != null)
                    <li class="list-group-item d-flex justify-content-between">
                        <div class="ms-3">
                            {{ \Carbon\Carbon::parse($noc->tarikh_sedia_memo_kelulusan)->format('d-m-Y') }}
                        </div>
                        <div class="ms-1 flex-grow-1"><span class="badge bg-secondary">Penyediaan Memo
                                Kelulusan</span></div>
                    </li>
                @endif
                @if ($noc->tarikh_kelulusan_pt != null)
                    <li class="list-group-item d-flex justify-content-between">
                        <div class="ms-3">
                            {{ \Carbon\Carbon::parse($noc->tarikh_kelulusan_pt)->format('d-m-Y') }}</div>
                        <div class="ms-1 flex-grow-1"><span class="badge bg-secondary">Terima Memo Kelulusan</span>
                        </div>
                    </li>
                @endif
                @if ($noc->tarikh_sedia_surat != null)
                    <li class="list-group-item d-flex justify-content-between">
                        <div class="ms-3">
                            {{ \Carbon\Carbon::parse($noc->tarikh_sedia_surat)->format('d-m-Y') }}</div>
                        <div class="ms-1 flex-grow-1"><span class="badge bg-secondary">Penyediaan Surat
                                Kelulusan</span></div>
                    </li>
                @endif
                @if ($noc->tarikh_hantar_surat_lulus != null)
                    <li class="list-group-item d-flex justify-content-between">
                        <div class="ms-3">
                            {{ \Carbon\Carbon::parse($noc->tarikh_hantar_surat_lulus)->format('d-m-Y') }}
                        </div>
                        <div class="ms-1 flex-grow-1"><span class="badge bg-secondary">Kemuka Surat Kelulusan
                                Rasmi</span></div>
                    </li>
                @endif
                @if ($noc->tarikh_mohon_modul != null)
                    <li class="list-group-item d-flex justify-content-between">
                        <div class="ms-3">
                            {{ \Carbon\Carbon::parse($noc->tarikh_mohon_modul)->format('d-m-Y') }}</div>
                        <div class="ms-1 flex-grow-1"><span class="badge bg-secondary">Permohonan NOC di
                                MyProjek</span></div>
                    </li>
                @endif
            </ol>
        </div>
    </div>
</div>
