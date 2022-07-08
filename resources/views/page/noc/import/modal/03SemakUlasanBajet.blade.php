<form method="POST" action="{{ route('noc.updateMohonUlasanBajet', $noc->id) }}">
    @csrf
    @method('PUT')
    <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Proses: Mohon Ulasan Bajet/Teknikal</h5>
        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <div class="mb-3">
            <label class="small mb-1" for="inputFirstName">Tarikh Mohon Ulasan</label>
            <div class="input-group input-group-joined">
                <span class="input-group-text">
                    <i data-feather="calendar"></i>
                </span>
                <input class="form-control ps-0" id="tarikh" name="tarikh" placeholder="Pilih tarikh..."
                    autocomplete="off" />
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Tutup</button>
            <button class="btn btn-primary" type="submit">simpan</button>
        </div>
</form>
<form method="POST" action="{{ route('noc.updateSemakUlasan', $noc->id) }}">
    @csrf
    @method('PUT')

    <div class="row gx-4">
        <div class="col-lg">
            <div class="card mb-4">
                <div class="card card-header-actions">
                    <div class="card-header">
                        Sila isi maklumat dibawah:
                        <i class="text-muted" data-feather="info" data-bs-toggle="tooltip" data-bs-placement="left"
                            title="input yang perlu diisi"></i>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <!-- Form Group (first name)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="inputFirstName">Tarikh Semakan Permohonan</label>
                                <div class="input-group input-group-joined">
                                    <span class="input-group-text">
                                        <i data-feather="calendar"></i>
                                    </span>
                                    <input class="form-control ps-0" id="tarikh" name="tarikh"
                                        placeholder="Pilih tarikh..." autocomplete="off" />
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="small mb-1">Status</label>
                                <select class="form-select" aria-label="Default select example" id="inputStatusSemak"
                                    name=" inputStatusSemak">
                                    <option selected disabled>Sila pilih:</option>
                                    <option value="lulus">Lulus Permohonan</option>
                                    <option value="dokumen_tambahan">Perlu Dokumen Tambahan</option>
                                </select>
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="fw-500 btn btn-primary">Simpan</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
