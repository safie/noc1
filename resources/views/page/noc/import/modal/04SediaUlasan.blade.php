@if (Auth::user()->peranan == 3)
    <form method="POST" action="{{ route('noc.updateSediaUlasanBajet', $noc->id) }}">
        @csrf
        @method('PUT')
        <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Proses: Penyediaan Ulasan Bajet</h5>
            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3">
                <label class="small mb-1" for="inputFirstName">Tarikh Penyediaan Ulasan</label>
                <div class="input-group input-group-joined">
                    <span class="input-group-text">
                        <i data-feather="calendar"></i>
                    </span>
                    <input class="form-control ps-0" id="tarikh" name="tarikh" placeholder="Pilih tarikh..."
                        autocomplete="off" />
                </div>
            </div>
            <div class="modal-footer">
                <div class="d-flex gap-2 spinner-hide">
                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Tutup</button>
                    <button class="btn btn-primary" type="submit">simpan</button>
                </div>
            </div>
    </form>
@endif

@if (Auth::user()->peranan == 4)
    <form method="POST" action="{{ route('noc.updateSediaUlasanTeknikal', $noc->id) }}">
        @csrf
        @method('PUT')
        <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Proses: Penyediaan Ulasan Teknikal</h5>
            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3">
                <label class="small mb-1" for="inputFirstName">Tarikh Penyediaan Ulasan</label>
                <div class="input-group input-group-joined">
                    <span class="input-group-text">
                        <i data-feather="calendar"></i>
                    </span>
                    <input class="form-control ps-0" id="tarikh" name="tarikh" placeholder="Pilih tarikh..."
                        autocomplete="off" />
                </div>
            </div>
            <div class="modal-footer">
                <div class="d-flex gap-2 spinner-hide">
                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Tutup</button>
                    <button class="btn btn-primary" type="submit">simpan</button>
                </div>
            </div>
    </form>
@endif
