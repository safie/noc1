<form method="POST" action="{{ route('noc.updateHantarSurat', $noc->id) }}">
    @csrf
    @method('PUT')
    <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Penghantaran Surat Kelulusan</h5>
        <button class="btn-close" data-bs-dismiss="modal" type="button" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <div class="mb-3">
            <label class="small mb-1" for="inputFirstName">Tarikh Penghantaran Surat</label>
            <div class="input-group input-group-joined">
                <span class="input-group-text">
                    <i data-feather="calendar"></i>
                </span>
                <input class="form-control ps-0" id="tarikh" name="tarikh" placeholder="Pilih tarikh..."
                    autocomplete="off" />
            </div>
        </div>
        <div class="mb-3">
            <label class="small mb-1" for="inputRujukanSurat">No. Rujukan Surat</label>
            <input class="form-control" id="no_rujukan" name="no_rujukan" type="text" autocomplete="off"
                placeholder="Masukkan No. Rujukan..." />
        </div>
        <div class="mb-3">
            <label class="small mb-1" for="inputRujukanSurat">Keputusan</label>
            <select class="form-select" aria-label="Default select example" id="keputusan" name="keputusan">
                <option selected>Pilih</option>
                <option value="1">Diluluskan</option>
                <option value="2">Tidak Diluluskan</option>
              </select>

        </div>
        <div class="mb-3">
            <label class="small mb-1" for="inputRujukanSurat">Kelulusan Oleh</label>
            <select class="form-select" aria-label="Default select example" id="pengurusan_tinggi" name="pengurusan_tinggi">
                <option selected>Pilih</option>
                <option value="1">Ketua Pengarah EPU</option>
                <option value="2">Timbalan Ketua Pengarah (Makro)</option>
                <option value="3">Timbalan Ketua Pengarah (Dasar)</option>
                <option value="4">Timbalan Ketua Pengarah (Sektoral)</option>
                <option value="5">Pengarah Bahagian</option>
              </select>
        </div>
    </div>
    <div class="modal-footer">
        <div class="d-flex gap-2 spinner-hide">
            <button class="btn btn-secondary" data-bs-dismiss="modal" type="button">Tutup</button>
            <button class="btn btn-primary" type="submit">Simpan</button>
        </div>
    </div>
</form>
