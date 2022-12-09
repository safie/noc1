<form method="POST" action="{{ route('noc.update', $noc->id) }}">
    @csrf
    @method('PUT')
    @if ($errors->any())
        <div class="row">
            <div class="col-lg-12">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Maaf, ada ralat data!</strong>
                    <button class="btn-close" data-bs-dismiss="alert" type="button" aria-label="Close"></button>
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
                        Kemasukan data
                        <i class="text-muted" data-feather="info" data-bs-toggle="tooltip" data-bs-placement="left"
                            title="input yang perlu diisi"></i>
                    </div>
                    <div class="card-body">
                        <!-- Form Group (first name)-->
                        <div class="mb-5">
                            <label class="small mb-1 fw-bolder"
                                for="inputTajuk">{{ $noc->getProjek->nama_projek }}</label>
                            <label class="small mb-1" for="inputTajuk">{{ $noc->kod_myprojek }}</label>
                        </div>

                        <div class="mb-3">
                            <label class="small mb-1" for="inputFirstName">Tarikh Permohonan</label>
                            <div class="input-group input-group-joined">
                                <span class="input-group-text">
                                    <i data-feather="calendar"></i>
                                </span>
                                <input class="form-control ps-0" id="tarikhMohonNOC" name="tarikhMohonNOC"
                                    value="{{ \Carbon\Carbon::parse($noc->tarikh_permohonan)->format('d/m/Y') }}"
                                    placeholder="Pilih tarikh..." autocomplete="off" />

                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="small mb-1" for="inputTajuk">No. Rujukan Surat</label>
                            <input class="form-control" id="inputRujukan" name="inputRujukan" type="text"
                                value="{{ $noc->no_rujukan }}" placeholder="Masukkan nombor rujukan surat..." />
                        </div>

                        <div class="mb-3">
                            <label class="small mb-1" for="inputFirstName">Tarikh Surat</label>
                            <div class="input-group input-group-joined">
                                <span class="input-group-text">
                                    <i data-feather="calendar"></i>
                                </span>
                                <input class="form-control ps-0" id="tarikhSuratMohon" name="tarikhSuratMohon"
                                    value="{{ \Carbon\Carbon::parse($noc->tarikh_surat_kementerian)->format('d/m/Y') }}"
                                    placeholder="Pilih tarikh..." autocomplete="off" />

                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="small mb-1">Klasifikasi</label>
                            <select class="form-select" id="inputKlasifikasi" name="inputKlasifikasi"
                                aria-label="Default select example">
                                <option value="{{ $noc->klasifikasi}}" @if(old('inputKlasifikasi') == '{{ $noc->klasifikasi}}')selected @endif>{{ $noc->getKategori->kod }} - {{ $noc->getKategori->nama_kat }}</option>

                                @foreach ($kategori as $data)
                                    <option value="{{ $data->id }}">{{ $data->kod }} -
                                        {{ $data->nama_kat }}
                                    </option>
                                @endforeach
                            </select>
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
                    <div class="d-grid"><button class="fw-500 btn btn-primary" type="submit">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
