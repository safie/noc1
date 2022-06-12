<div class="card card-header-actions">
    <div class="card-header">
        Tindakan
        <i class="text-muted" data-feather="info" data-bs-toggle="tooltip" data-bs-placement="left"
            title="Data akan disimpan"></i>
    </div>
    <div class="card-body">
        @if ($noc->status_noc == 'noc_1')
            <div class="d-grid">
                <a type="button" class="fw-500 btn btn-primary mb-2"
                    href="{{ route('noc.editSemak', $noc->id) }}">Semakan NOC</a>
            </div>
        @endif
        @if ($noc->status_noc == 'noc_2')
            <div class="d-grid">
                <a type="button" class="fw-500 btn btn-primary mb-2"
                    href="{{ route('noc.editSemakUlasan', $noc->id) }}">Semakan Permohonan Ulasan</a>
            </div>
        @endif
        @if ($noc->status_noc == 'noc_3')
            <div class="d-grid">
                <a type="button" class="fw-500 btn btn-primary mb-2" href="#">Penyediaan Ulasan</a>
            </div>
        @endif
        @if ($noc->status_noc == 'noc_4')
            <div class="d-grid">
                <a type="button" class="fw-500 btn btn-primary mb-2" href="#">Penghantaran Ulasan NOC</a>
            </div>
        @endif
        @if ($noc->status_noc == 'noc_5')
            <div class="d-grid">
                <a type="button" class="fw-500 btn btn-primary mb-2" href="#">Penyediaan Memo Kelulusan</a>
            </div>
        @endif
        @if ($noc->status_noc == 'noc_6')
            <div class="d-grid">
                <button type="button" class="fw-500 btn btn-primary mb-2" href="#">Terima Memo Kelulusan</button>
            </div>
        @endif
        @if ($noc->status_noc == 'noc_7')
            <div class="d-grid">
                <button type="button" class="fw-500 btn btn-primary mb-2" href="#">Penyediaan Surat Kelulusan</button>
            </div>
        @endif
        @if ($noc->status_noc == 'noc_8')
            <div class="d-grid">
                <button type="button" class="fw-500 btn btn-primary mb-2" href="#">Hantar Surat Kelulusan Rasmi</button>
            </div>
        @endif
        @if ($noc->status_noc == 'noc_9')
            <div class="d-grid">
                <button type="button" class="fw-500 btn btn-primary mb-2" href="#">Permohonan NOC di MyProjek</button>
            </div>
        @endif

    </div>
</div>
