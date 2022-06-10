<div class="card card-header-actions">
    <div class="card-header">
        Tindakan
        <i class="text-muted" data-feather="info" data-bs-toggle="tooltip" data-bs-placement="left"
            title="Data akan disimpan"></i>
    </div>
    <div class="card-body">
        @if ($noc->status_noc == 'noc_1')
            <div class="d-grid">
                <button type="button" class="fw-500 btn btn-primary mb-2" href="#">Semakan NOC</button>
            </div>
        @endif
        @if ($noc->status_noc == 'noc_2')
            <div class="d-grid">
                <button type="button" class="fw-500 btn btn-primary mb-2" href="#">Penyediaan Ulasan NOC</button>
            </div>
        @endif
        @if ($noc->status_noc == 'noc_3')
            <div class="d-grid">
                <button type="button" class="fw-500 btn btn-primary mb-2" href="#">Penghantaran Ulasan NOC</button>
            </div>
        @endif
        @if ($noc->status_noc == 'noc_4')
            <div class="d-grid">
                <button type="button" class="fw-500 btn btn-primary mb-2" href="#">Penyediaan Memo Kelulusan</button>
            </div>
        @endif
        @if ($noc->status_noc == 'noc_5')
            <div class="d-grid">
                <button type="button" class="fw-500 btn btn-primary mb-2" href="#">Terima Memo Kelulusan</button>
            </div>
        @endif
        @if ($noc->status_noc == 'noc_6')
            <div class="d-grid">
                <button type="button" class="fw-500 btn btn-primary mb-2" href="#">Penyediaan Surat Kelulusan</button>
            </div>
        @endif
        @if ($noc->status_noc == 'noc_7')
            <div class="d-grid">
                <button type="button" class="fw-500 btn btn-primary mb-2" href="#">Penerimaan Surat Kelulusan</button>
            </div>
        @endif
        @if ($noc->status_noc == 'noc_8')
            <div class="d-grid">
                <button type="button" class="fw-500 btn btn-primary mb-2" href="#">Hantar Surat Kelulusan</button>
            </div>
        @endif
        @if ($noc->status_noc == 'noc_9')
            <div class="d-grid">
                <button type="button" class="fw-500 btn btn-primary mb-2" href="#">Permohonan Modul NOC</button>
            </div>
        @endif

    </div>
</div>
