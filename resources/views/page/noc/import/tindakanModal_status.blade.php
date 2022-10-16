<div class="card card-header-actions">
    <div class="card-header">
        Tindakan
        <i class="text-muted" data-feather="info" data-bs-toggle="tooltip" data-bs-placement="left"
            title="Tindakan NOC yang diperlukan"></i>
    </div>
    <div class="card-body text-center">
        {{-- NOC Pengguna Bahagian --}}
        @if (Auth::user()->peranan == 2)
            @if ($noc->status_noc == 'noc_1' or $noc->status_noc == 'noc_17')
                <div class="d-grid">
                    <button type="button" class="fw-500 btn btn-dark mb-2" data-bs-toggle="modal"
                        data-bs-target="#modalLulus">
                        Semak NOC
                    </button>
                </div>
            @elseif ($noc->status_noc == 'noc_2' and $noc->flow != 'flow1')
                <div class="d-grid">
                    <button type="button" class="fw-500 btn btn-dark mb-2" data-bs-toggle="modal"
                        data-bs-target="#modalLulus">
                        Mohon Ulasan
                    </button>
                </div>
            @elseif ($noc->status_noc == 'noc_18' or $noc->status_noc2 == 'noc_19')
                <div class="d-grid">
                    @if ($noc->status_noc == 'noc_18')
                        <button type="button" class="fw-500 btn btn-dark mb-2" data-bs-toggle="modal"
                            data-bs-target="#modalUlasanBajet">
                            Mohon Ulasan Bajet
                        </button>
                    @endif
                    @if ($noc->status_noc2 == 'noc_19')
                        <button type="button" class="fw-500 btn btn-dark mb-2" data-bs-toggle="modal"
                            data-bs-target="#modalUlasanTeknikal">
                            Mohon Ulasan Teknikal
                        </button>
                    @endif
                </div>
            @elseif ($noc->status_noc == 'noc_9' or $noc->status_noc == 'noc_10')
                <div class="d-grid">
                    <button type="button" class="fw-500 btn btn-dark mb-2" data-bs-toggle="modal"
                        data-bs-target="#modalLulus">
                        Sedia Memo Kelulusan
                    </button>
                </div>
            @elseif ($noc->status_noc == 'noc_11')
                <div class="d-grid">
                    <button type="button" class="fw-500 btn btn-dark mb-2" data-bs-toggle="modal"
                        data-bs-target="#modalLulus">
                        Hantar Memo Kelulusan
                    </button>
                </div>
            @elseif ($noc->status_noc == 'noc_12')
                <div class="d-grid">
                    <button type="button" class="fw-500 btn btn-dark mb-2" data-bs-toggle="modal"
                        data-bs-target="#modalLulus">
                        Terima Memo Kelulusan
                    </button>
                </div>
            @elseif ($noc->noc_flow == 'flow1')
                @if ($noc->status_noc == 'noc_13' or $noc->status_noc == 'noc_2')
                    <div class="d-grid">
                        <button type="button" class="fw-500 btn btn-dark mb-2" data-bs-toggle="modal"
                            data-bs-target="#modalLulus">
                            Sedia Surat Kelulusan
                        </button>
                    </div>
                @endif
            @elseif ($noc->status_noc == 'noc_14')
                <div class="d-grid">
                    <button type="button" class="fw-500 btn btn-dark mb-2" data-bs-toggle="modal"
                        data-bs-target="#modalLulus">
                        Hantar Surat Kelulusan
                    </button>
                </div>
            @elseif ($noc->status_noc == 'noc_15')
                <div class="d-grid">
                    <button type="button" class="fw-500 btn btn-dark mb-2" data-bs-toggle="modal"
                        data-bs-target="#modalLulus">
                        Hantar Surat Kelulusan
                    </button>
                </div>
            @endif

        {{-- NOC Pengguna BBP --}}
        @elseif (Auth::user()->peranan == 3)
            @if ($noc->status_noc == 'noc_3')
                <div class="d-grid">
                    <button type="button" class="fw-500 btn btn-dark mb-2" data-bs-toggle="modal"
                        data-bs-target="#modalLulus">
                        Semak Permohonan
                    </button>
                </div>
            @elseif ($noc->status_noc == 'noc_5')
                <div class="d-grid">
                    <button type="button" class="fw-500 btn btn-dark mb-2" data-bs-toggle="modal"
                        data-bs-target="#modalLulus">
                        Sedia Ulasan
                    </button>
                </div>
            @elseif ($noc->status_noc == 'noc_7')
                <div class="d-grid">
                    <button type="button" class="fw-500 btn btn-dark mb-2" data-bs-toggle="modal"
                        data-bs-target="#modalLulus">
                        Hantar Ulasan
                    </button>
                </div>
            @endif

        {{-- NOC Pengguna BPN --}}
        @elseif (Auth::user()->peranan == 4)
            @if ($noc->status_noc2 == 'noc_4')
                <div class="d-grid">
                    <button type="button" class="fw-500 btn btn-dark mb-2" data-bs-toggle="modal"
                        data-bs-target="#modalLulus">
                        Semak Permohonan
                    </button>
                </div>
            @elseif ($noc->status_noc2 == 'noc_6')
                <div class="d-grid">
                    <button type="button" class="fw-500 btn btn-dark mb-2" data-bs-toggle="modal"
                        data-bs-target="#modalLulus">
                        Sedia Ulasan
                    </button>
                </div>
            @elseif ($noc->status_noc2 == 'noc_8')
                <div class="d-grid">
                    <button type="button" class="fw-500 btn btn-dark mb-2" data-bs-toggle="modal"
                        data-bs-target="#modalLulus">
                        Hantar Ulasan
                    </button>
                </div>
            @endif

        @elseif ($noc->status_noc == 'noc_16')
            <div class="d-grid">
                <h5>Selesai NOC</h5>
            </div>

        {{-- NOC Pengguna Admin --}}
        @else
            <div class="d-grid">
                <h5>Dalam proses</h5>
            </div>
        @endif
    </div>
</div>
