<form method="POST" action="{{ route('noc.updateSemakUlasan', $noc->id) }}">
    @csrf
    @method('PUT')
    @if ($errors->any())
        <div class="row">
            <div class="col-lg-12">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Maaf, ada ralat data!</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    @endif
    <div class="row gx-4">
        <div class="col-lg-8">
            <div class="card mb-4">
                <div class="card card-header-actions">
                    <div class="card-header">
                        Kemasukan Maklumat
                        <i class="text-muted" data-feather="info" data-bs-toggle="tooltip" data-bs-placement="left"
                            title="input yang perlu diisi"></i>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div>
                                <h3 style="text-transform:uppercase;">{{ $noc->tajuk_permohonan }}</h3>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <!-- Form Group (first name)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="inputFirstName">Tarikh Permohonan</label>
                                <div class="input-group input-group-joined">
                                    <span class="input-group-text">
                                        <i data-feather="calendar"></i>
                                    </span>
                                    <input class="form-control ps-0" id="tarikh" name="tarikh"
                                        placeholder="Pilih tarikh..." autocomplete="off" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card card-header-actions">
                <div class="card-header">
                    Tindakan
                    <i class="text-muted" data-feather="info" data-bs-toggle="tooltip" data-bs-placement="left"
                        title="Data akan disimpan"></i>
                </div>
                <div class="card-body">
                    <div class="d-grid"><button type="submit" class="fw-500 btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
