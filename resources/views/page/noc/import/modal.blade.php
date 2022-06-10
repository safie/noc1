<!-- Modal -->
<div class="modal fade" id="modalLulus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
    data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form method="POST" action="{{ route('noc.semakLulus', $noc->id) }}">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Lulus Semakan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        @error('tarikhSemak1')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <label class="small mb-1" for="inputFirstName">Tarikh</label>
                        <div class="input-group input-group-joined">
                            <span class="input-group-text">
                                <i data-feather="calendar"></i>
                            </span>
                            <input class="form-control ps-0" id="tarikhSemak1" name="tarikhSemak1"
                                placeholder="Pilih tarikh" autocomplete="off" />
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="fw-500 btn btn-primary mb-2">Lulus Semakan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="modalSemak" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
    data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form method="POST" action="{{ route('noc.semakSemula', $noc->id) }}">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sila semak semula</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="small mb-1" for="inputFirstName">Tarikh</label>
                        <div class="input-group input-group-joined">
                            <span class="input-group-text">
                                <i data-feather="calendar"></i>
                            </span>
                            <input class="form-control ps-0" id="tarikhSemak2" name="tarikhSemak2"
                                placeholder="Pilih tarikh" autocomplete="off" />
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="fw-500 btn btn-danger mb-2">Semak semula</button>
                </div>
            </form>
        </div>
    </div>
</div>
