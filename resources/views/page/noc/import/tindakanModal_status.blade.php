<div class="card card-header-actions">
    <div class="card-header">
        Tindakan
        <i class="text-muted" data-feather="info" data-bs-toggle="tooltip" data-bs-placement="left"
            title="Tindakan NOC yang diperlukan"></i>
    </div>
    <div class="card-body text-center">
        @if (($noc->status_noc == 'noc_1' or $noc->status_noc == 'noc_17') and Auth::user()->peranan == 2)
            <div class="d-grid">
                <button type="button" class="fw-500 btn btn-primary mb-2" data-bs-toggle="modal"
                    data-bs-target="#modalLulus">
                    Semak NOC
                </button>

                {{-- <a type="button" class="fw-500 btn btn-primary mb-2"
                    href="{{ route('noc.editSemak', $noc->id) }}">Semak NOC</button> --}}
            </div>
        @endif
        @if ($noc->status_noc == 'noc_2' and Auth::user()->peranan == 2)
            <div class="d-grid">
                <button type="button" class="fw-500 btn btn-primary mb-2" data-bs-toggle="modal"
                    data-bs-target="#modalLulus">
                    Mohon Ulasan
                </button>
                {{-- <a type="button" class="fw-500 btn btn-primary mb-2"
                    href="{{ route('noc.editMohonUlasan', $noc->id) }}">Mohon Ulasan</a> --}}
            </div>
        @endif
        @if (($noc->status_noc == 'noc_3' or $noc->status_noc == 'noc_4' or $noc->status_noc == 'noc_5' or $noc->status_noc == 'noc_6' or $noc->status_noc == 'noc_7' or $noc->status_noc == 'noc_8' or $noc->status_noc == 'noc_9' or $noc->status_noc == 'noc_10') and Auth::user()->peranan == 2)
            <p>Sedang dalam proses</p>
        @endif
        @if ($noc->status_noc == 'noc_3' and Auth::user()->peranan == 3)
            <div class="d-grid">
                <button type="button" class="fw-500 btn btn-primary mb-2" data-bs-toggle="modal"
                    data-bs-target="#modalLulus">
                    Semak Permohonan
                </button>
                {{-- <a type="button" class="fw-500 btn btn-primary mb-2"
                    href="{{ route('noc.editSemakUlasan', $noc->id) }}">Semak Permohonan</a> --}}
            </div>
        @endif
        @if ($noc->status_noc == 'noc_4' and Auth::user()->peranan == 3)
            <div class="d-grid">
                <button type="button" class="fw-500 btn btn-primary mb-2" data-bs-toggle="modal"
                    data-bs-target="#modalLulus">
                    Sedia Ulasan
                </button>
                {{-- <a type="button" class="fw-500 btn btn-primary mb-2"
                    href="{{ route('noc.editSediaUlasan', $noc->id) }}">Sedia Ulasan</a> --}}
            </div>
        @endif
        @if ($noc->status_noc == 'noc_5' and Auth::user()->peranan == 3)
            <div class="d-grid">
                <button type="button" class="fw-500 btn btn-primary mb-2" data-bs-toggle="modal"
                    data-bs-target="#modalLulus">
                    Hantar Ulasan
                </button>
                {{-- <a type="button" class="fw-500 btn btn-primary mb-2"
                    href="{{ route('noc.editHantarUlasan', $noc->id) }}">Hantar Ulasan</a> --}}
            </div>
        @endif
        @if ($noc->status_noc == 'noc_11' and Auth::user()->peranan == 2)
            <div class="d-grid">
                <button type="button" class="fw-500 btn btn-primary mb-2" data-bs-toggle="modal"
                    data-bs-target="#modalLulus">
                    Sedia Memo Kelulusan
                </button>
                {{-- <a type="button" class="fw-500 btn btn-primary mb-2"
                    href="{{ route('noc.editSediaMemo', $noc->id) }}">Sedia Memo Kelulusan</a> --}}
            </div>
        @endif
        @if ($noc->status_noc == 'noc_12' and Auth::user()->peranan == 2)
            <div class="d-grid">
                <button type="button" class="fw-500 btn btn-primary mb-2" data-bs-toggle="modal"
                    data-bs-target="#modalLulus">
                    Hantar Memo Kelulusan
                </button>
                {{-- <a type="button" class="fw-500 btn btn-primary mb-2"
                    href="{{ route('noc.editTerimaMemo', $noc->id) }}">Terima Memo Kelulusan</a> --}}
            </div>
        @endif
        @if ($noc->status_noc == 'noc_13' and Auth::user()->peranan == 2)
            <div class="d-grid">
                <button type="button" class="fw-500 btn btn-primary mb-2" data-bs-toggle="modal"
                    data-bs-target="#modalLulus">
                    Terima Memo Kelulusan
                </button>
                {{-- <a type="button" class="fw-500 btn btn-primary mb-2"
                    href="{{ route('noc.editTerimaMemo', $noc->id) }}">Terima Memo Kelulusan</a> --}}
            </div>
        @endif
        @if ($noc->status_noc == 'noc_14' and Auth::user()->peranan == 2)
            <div class="d-grid">
                <button type="button" class="fw-500 btn btn-primary mb-2" data-bs-toggle="modal"
                    data-bs-target="#modalLulus">
                    Sedia Surat Kelulusan
                </button>
                {{-- <a type="button" class="fw-500 btn btn-primary mb-2"
                    href="{{ route('noc.editHantarSurat', $noc->id) }}">Hantar Surat Kelulusan</a> --}}
            </div>
        @endif
        @if ($noc->status_noc == 'noc_15' and Auth::user()->peranan == 2)
            <div class="d-grid">
                <button type="button" class="fw-500 btn btn-primary mb-2" data-bs-toggle="modal"
                    data-bs-target="#modalLulus">
                    Hantar Surat Kelulusan
                </button>
                {{-- <a type="button" class="fw-500 btn btn-primary mb-2"
                    href="{{ route('noc.editHantarSurat', $noc->id) }}">Hantar Surat Kelulusan</a> --}}
            </div>
        @endif
        @if ($noc->status_noc == 'noc_16' and Auth::user()->peranan == 2)
            <div class="d-grid">
                <button type="button" class="fw-500 btn btn-primary mb-2" data-bs-toggle="modal"
                    data-bs-target="#modalLulus">
                    Mohon Modul NOC
                </button>
                {{-- <a type="button" class="fw-500 btn btn-primary mb-2"
                    href="{{ route('noc.editMohonModul', $noc->id) }}">Mohon Modul NOC MyProjek</a> --}}
            </div>
        @endif

        @if ($noc->status_noc == 'noc_17')
            <div class="d-grid">
                <h5>Selesai NOC</h5>
            </div>
        @endif

    </div>
</div>
