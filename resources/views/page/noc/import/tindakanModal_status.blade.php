<div class="card card-header-actions">
    {{-- <div class="card-header">
        Tindakan
        <i class="text-muted" data-feather="info" data-bs-toggle="tooltip" data-bs-placement="left"
            title="Tindakan NOC yang diperlukan"></i>
    </div> --}}
    <div class="card-body">
        <div class="text-center align-middle">
            @if (Auth::user()->peranan == 2)
                @if ($noc->noc_flow == 'flow1')
                    @if ($noc->status_noc == 'noc_1' or $noc->status_noc == 'noc_17')
                        <div class="d-grid">
                            <button class="fw-500 btn btn-dark mb-2" data-bs-toggle="modal" data-bs-target="#modalLulus"
                                type="button">
                                Semak NOC
                            </button>
                        </div>
                    @elseif ($noc->status_noc == 'noc_2')
                        <div class="d-grid">
                            <button class="fw-500 btn btn-dark mb-2" data-bs-toggle="modal" data-bs-target="#modalLulus"
                                type="button">
                                Hantar Surat
                            </button>
                        </div>
                    @elseif ($noc->status_noc == 'noc_15' and $noc->keputusan == 1)
                        <div class="d-grid">
                            <button class="fw-500 btn btn-dark mb-2" data-bs-toggle="modal" data-bs-target="#modalLulus"
                                type="button">
                                Mohon Modul NOC
                            </button>
                        </div>
                    @else
                        <div class="">
                            <h5>Selesai</h5>
                        </div>
                    @endif
                @elseif ($noc->noc_flow == 'flow2')
                    @if ($noc->status_noc == 'noc_1' or $noc->status_noc == 'noc_17')
                        <div class="d-grid">
                            <button class="fw-500 btn btn-dark mb-2" data-bs-toggle="modal" data-bs-target="#modalLulus"
                                type="button">
                                Semak NOC
                            </button>
                        </div>
                    @elseif ($noc->status_noc == 'noc_2' or $noc->status_noc == 'noc_18')
                        <div class="d-grid">
                            <button class="fw-500 btn btn-dark mb-2" data-bs-toggle="modal" data-bs-target="#modalLulus"
                                type="button">
                                Mohon Ulasan
                            </button>
                        </div>
                    @elseif ($noc->status_noc == 'noc_9')
                        <div class="d-grid">
                            <button class="fw-500 btn btn-dark mb-2" data-bs-toggle="modal" data-bs-target="#modalLulus"
                                type="button">
                                Hantar Surat
                            </button>
                        </div>
                    @elseif ($noc->status_noc == 'noc_15' and $noc->keputusan == 1)
                        <div class="d-grid">
                            <button class="fw-500 btn btn-dark mb-2" data-bs-toggle="modal" data-bs-target="#modalLulus"
                                type="button">
                                Mohon Modul NOC
                            </button>
                        </div>
                    @elseif ($noc->status_noc == 'noc_16' or $noc->keputusan == 2)
                        <div class="">
                            <h5>Selesai</h5>
                        </div>
                    @else
                        <div class="d-grid">
                            <h5>Sedang Diproses</h5>
                        </div>
                    @endif
                @elseif ($noc->noc_flow == 'flow3')
                    @if ($noc->status_noc == 'noc_1' or $noc->status_noc == 'noc_17')
                        <div class="d-grid">
                            <button class="fw-500 btn btn-dark mb-2" data-bs-toggle="modal" data-bs-target="#modalLulus"
                                type="button">
                                Semak NOC
                            </button>
                        </div>
                    @elseif ($noc->status_noc == 'noc_2')
                        <div class="d-grid">
                            <button class="fw-500 btn btn-dark mb-2" data-bs-toggle="modal" data-bs-target="#modalLulus"
                                type="button">
                                Mohon Ulasan
                            </button>
                        </div>
                    @elseif ($noc->status_noc == 'noc_9' and $noc->status_noc2 == 'noc_10')
                        <div class="d-grid">
                            <button class="fw-500 btn btn-dark mb-2" data-bs-toggle="modal" data-bs-target="#modalLulus"
                                type="button">
                                Hantar Surat
                            </button>
                        </div>
                    @elseif ($noc->status_noc == 'noc_15')
                        <div class="d-grid">
                            <button class="fw-500 btn btn-dark mb-2" data-bs-toggle="modal" data-bs-target="#modalLulus"
                                type="button">
                                Mohon Modul NOC
                            </button>
                        </div>
                    @elseif ($noc->status_noc == 'noc_3' or $noc->status_noc2 == 'noc_4')
                        <div class="d-grid">
                            <h5>Sedang Diproses</h5>
                        </div>
                    @elseif ($noc->status_noc == 'noc_16')
                        <div class="">
                            <h5>Selesai</h5><br>
                            {{-- <a class="btn btn-primary" href="{{ route('noc.createPDF', $noc->id) }}">Export PDF</a> --}}
                        </div>
                    @endif

                    @if ($noc->status_noc == 'noc_18')
                        <div class="d-grid">
                            <button class="fw-500 btn btn-dark mb-2" data-bs-toggle="modal" data-bs-target="#modalBajet"
                                type="button">
                                Mohon Ulasan Bajet
                            </button>
                        </div>
                    @endif

                    @if ($noc->status_noc2 == 'noc_19')
                        <div class="d-grid">
                            <button class="fw-500 btn btn-dark mb-2" data-bs-toggle="modal"
                                data-bs-target="#modalTeknikal" type="button">
                                Mohon Ulasan Teknikal
                            </button>
                        </div>
                    @endif

                    {{-- @if ($noc->status_noc == 'noc_3' or $noc->status_noc == 'noc_5' or $noc->status_noc2 == 'noc_4' or $noc->status_noc2 == 'noc_6' or $noc->status_noc2 == 'noc_6')
                <div class="d-grid">
                    Sedang Diproses
                </div>
                @endif --}}

                @endif
            @elseif (Auth::user()->peranan == 3)
                @if ($noc->noc_flow == 'flow2')
                    @if ($noc->status_noc == 'noc_3')
                        <div class="d-grid">
                            <button class="fw-500 btn btn-dark mb-2" data-bs-toggle="modal" data-bs-target="#modalLulus"
                                type="button">
                                Semak Permohonan NOC
                            </button>
                        </div>
                    @endif
                    @if ($noc->status_noc == 'noc_5')
                        <div class="d-grid">
                            <button class="fw-500 btn btn-dark mb-2" data-bs-toggle="modal" data-bs-target="#modalLulus"
                                type="button">
                                Hantar Ulasan Bajet
                            </button>
                        </div>
                    @endif
                    @if ($noc->status_noc == 'noc_15' or $noc->status_noc == 'noc_9')
                        <div>
                            <h5>Sedang Diproses</h5>
                        </div>
                    @endif
                @elseif ($noc->noc_flow == 'flow3')
                    @if ($noc->status_noc == 'noc_3')
                        <div class="d-grid">
                            <button class="fw-500 btn btn-dark mb-2" data-bs-toggle="modal" data-bs-target="#modalLulus"
                                type="button">
                                Semak Permohonan NOC
                            </button>
                        </div>
                    @elseif ($noc->status_noc == 'noc_5')
                        <div class="d-grid">
                            <button class="fw-500 btn btn-dark mb-2" data-bs-toggle="modal" data-bs-target="#modalLulus"
                                type="button">
                                Hantar Ulasan Bajet
                            </button>
                        </div>
                    @else
                        <div class="">
                            <h5>Sedang Diproses</h5>
                        </div>
                    @endif
                @else
                    <div class="">
                        <h5>Sedang Diproses</h5>
                    </div>
                @endif
            @elseif (Auth::user()->peranan == 4)
                @if ($noc->noc_flow == 'flow3')
                    @if ($noc->status_noc2 == 'noc_4')
                        <div class="d-grid">
                            <button class="fw-500 btn btn-dark mb-2" data-bs-toggle="modal" data-bs-target="#modalLulus"
                                type="button">
                                Semak Permohonan NOC
                            </button>
                        </div>
                    @elseif ($noc->status_noc2 == 'noc_6')
                        <div class="d-grid">
                            <button class="fw-500 btn btn-dark mb-2" data-bs-toggle="modal"
                                data-bs-target="#modalLulus" type="button">
                                Hantar Ulasan Teknikal
                            </button>
                        </div>
                    @else
                        <div class="">
                            <h5>Sedang Diproses</h5>
                        </div>
                    @endif
                @endif
            @else
                <h5>Selesai</h5>
                {{-- <a class="btn btn-primary" href="{{ route('noc.previewDetail', $noc->id) }}">Preview</a> --}}
            @endif
        </div>
    </div>
</div>
