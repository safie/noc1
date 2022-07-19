<div class="card card-header-actions">
    <div class="card-header">
        Tindakan
        <i class="text-muted" data-feather="info" data-bs-toggle="tooltip" data-bs-placement="left"
            title="Tindakan NOC yang diperlukan"></i>
    </div>
    <div class="card-body text-center">

        @if (Auth::user()->peranan == 2 and ($noc->status_noc == 'noc_1' or $noc->status_noc == 'noc_17'))
            <div class="d-grid">
                <button type="button" class="fw-500 btn btn-dark mb-2" data-bs-toggle="modal"
                    data-bs-target="#modalLulus">
                    Semak NOC
                </button>
            </div>
        @elseif (Auth::user()->peranan == 2 and
            ($noc->status_noc == 'noc_2' and $noc->flow != 'flow1' or
                $noc->status_noc == 'noc_18' or
                $noc->status_noc == 'noc_19'))
            <div class="d-grid">
                <button type="button" class="fw-500 btn btn-dark mb-2" data-bs-toggle="modal"
                    data-bs-target="#modalLulus">
                    Mohon Ulasan
                </button>
            </div>
        @elseif (Auth::user()->peranan == 3 and $noc->status_noc == 'noc_3' or
            Auth::user()->peranan == 4 and $noc->status_noc2 == 'noc_4')
            <div class="d-grid">
                <button type="button" class="fw-500 btn btn-dark mb-2" data-bs-toggle="modal"
                    data-bs-target="#modalLulus">
                    Semak Permohonan
                </button>
            </div>
        @elseif (Auth::user()->peranan == 3 and $noc->status_noc == 'noc_5' or
            Auth::user()->peranan == 4 and $noc->status_noc2 == 'noc_6')
            <div class="d-grid">
                <button type="button" class="fw-500 btn btn-dark mb-2" data-bs-toggle="modal"
                    data-bs-target="#modalLulus">
                    Sedia Ulasan
                </button>
            </div>
        @elseif (Auth::user()->peranan == 3 and $noc->status_noc == 'noc_7' or
            Auth::user()->peranan == 4 and $noc->status_noc2 == 'noc_8')
            <div class="d-grid">
                <button type="button" class="fw-500 btn btn-dark mb-2" data-bs-toggle="modal"
                    data-bs-target="#modalLulus">
                    Hantar Ulasan
                </button>
            </div>
        @elseif (Auth::user()->peranan == 2 and ($noc->status_noc == 'noc_9' or $noc->status_noc == 'noc_10'))
            <div class="d-grid">
                <button type="button" class="fw-500 btn btn-dark mb-2" data-bs-toggle="modal"
                    data-bs-target="#modalLulus">
                    Sedia Memo Kelulusan
                </button>
            </div>
        @elseif (Auth::user()->peranan == 2 and $noc->status_noc == 'noc_11')
            <div class="d-grid">
                <button type="button" class="fw-500 btn btn-dark mb-2" data-bs-toggle="modal"
                    data-bs-target="#modalLulus">
                    Hantar Memo Kelulusan
                </button>
            </div>
        @elseif (Auth::user()->peranan == 2 and $noc->status_noc == 'noc_12')
            <div class="d-grid">
                <button type="button" class="fw-500 btn btn-dark mb-2" data-bs-toggle="modal"
                    data-bs-target="#modalLulus">
                    Terima Memo Kelulusan
                </button>
            </div>
        @elseif (Auth::user()->peranan == 2 and
            ($noc->status_noc == 'noc_13' or $noc->status_noc == 'noc_2' and $noc->noc_flow == 'flow1'))
            <div class="d-grid">
                <button type="button" class="fw-500 btn btn-dark mb-2" data-bs-toggle="modal"
                    data-bs-target="#modalLulus">
                    Sedia Surat Kelulusan
                </button>
            </div>
        @elseif (Auth::user()->peranan == 2 and $noc->status_noc == 'noc_14')
            <div class="d-grid">
                <button type="button" class="fw-500 btn btn-dark mb-2" data-bs-toggle="modal"
                    data-bs-target="#modalLulus">
                    Hantar Surat Kelulusan
                </button>
            </div>
        @elseif (Auth::user()->peranan == 2 and $noc->status_noc == 'noc_15')
            <div class="d-grid">
                <button type="button" class="fw-500 btn btn-dark mb-2" data-bs-toggle="modal"
                    data-bs-target="#modalLulus">
                    Mohon Modul NOC
                </button>
            </div>
        @elseif ($noc->status_noc == 'noc_16')
            <div class="d-grid">
                <h5>Selesai NOC</h5>
            </div>
        @else
            Sedang diproses
        @endif
    </div>
</div>
