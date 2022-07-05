<form method="POST" action="{{ route('noc.updateSediaUlasan', $noc->id) }}">
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
                                <label class="small mb-1" for="inputFirstName">Tarikh Penyediaan Ulasan</label>
                                <div class="input-group input-group-joined">
                                    <span class="input-group-text">
                                        <i data-feather="calendar"></i>
                                    </span>
                                    <input class="form-control ps-0" id="tarikh" name="tarikh"
                                        placeholder="Pilih tarikh..." autocomplete="off" />
                                </div>
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
