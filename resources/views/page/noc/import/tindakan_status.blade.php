<div class="card card-header-actions">
    <div class="card-header">
        Tindakan
        <i class="text-muted" data-feather="info" data-bs-toggle="tooltip" data-bs-placement="left"
            title="Tindakan NOC yang diperlukan"></i>
    </div>
    <div class="card-body text-center">
        @if ($noc->status_noc == 'noc_1')
            <div class="d-grid">
                <a type="button" class="fw-500 btn btn-primary mb-2"
                    href="{{ route('noc.editSemak', $noc->id) }}">Semak NOC</a>
            </div>
        @endif
        @if ($noc->status_noc == 'noc_2')
            <div class="d-grid">
                <a type="button" class="fw-500 btn btn-primary mb-2"
                    href="{{ route('noc.editMohonUlasan', $noc->id) }}">Mohon Ulasan</a>
            </div>
        @endif
         @if ($noc->status_noc == 'noc_3')
            <div class="d-grid">
                <a type="button" class="fw-500 btn btn-primary mb-2"
                    href="{{ route('noc.editSemakUlasan', $noc->id) }}">Semak Permohonan</a>
            </div>
        @endif
        @if ($noc->status_noc == 'noc_4')
            <div class="d-grid">
                <a type="button" class="fw-500 btn btn-primary mb-2"
                    href="{{ route('noc.editSediaUlasan', $noc->id) }}">Sedia Ulasan</a>
            </div>
        @endif
        @if ($noc->status_noc == 'noc_5')
            <div class="d-grid">
                <a type="button" class="fw-500 btn btn-primary mb-2"
                    href="{{ route('noc.editHantarUlasan', $noc->id) }}">Hantar Ulasan</a>
            </div>
        @endif
        @if ($noc->status_noc == 'noc_6')
            <div class="d-grid">
                <a type="button" class="fw-500 btn btn-primary mb-2"
                    href="{{ route('noc.editSediaMemo', $noc->id) }}">Sedia Memo Kelulusan</a>
            </div>
        @endif
        @if ($noc->status_noc == 'noc_7')
            <div class="d-grid">
                <a type="button" class="fw-500 btn btn-primary mb-2"
                    href="{{ route('noc.editTerimaMemo', $noc->id) }}">Terima Memo Kelulusan</a>
            </div>
        @endif
        @if ($noc->status_noc == 'noc_8')
            <div class="d-grid">
                <a type="button" class="fw-500 btn btn-primary mb-2"
                    href="{{ route('noc.editSediaSurat', $noc->id) }}">Sedia Surat Kelulusan</a>
            </div>
        @endif
        @if ($noc->status_noc == 'noc_9')
            <div class="d-grid">
                <a type="button" class="fw-500 btn btn-primary mb-2"
                    href="{{ route('noc.editHantarSurat', $noc->id) }}">Hantar Surat Kelulusan</a>
            </div>
        @endif
        @if ($noc->status_noc == 'noc_10')
            <div class="d-grid">
                <a type="button" class="fw-500 btn btn-primary mb-2"
                    href="{{ route('noc.editMohonModul', $noc->id) }}">Mohon Modul NOC MyProjek</a>
            </div>
        @endif

        @if ($noc->status_noc == 'noc_11')
            <div class="d-grid">
                <h5>Selesai NOC</h5>
            </div>
        @endif

    </div>
</div>
