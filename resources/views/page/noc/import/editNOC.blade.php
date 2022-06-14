<form method="POST" action="{{ route('noc.update', $noc->id) }}">
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
                        Kemasukan data
                        <i class="text-muted" data-feather="info" data-bs-toggle="tooltip" data-bs-placement="left"
                            title="input yang perlu diisi"></i>
                    </div>
                    <div class="card-body">
                        <!-- Form Group (first name)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputTajuk">Tajuk Permohonan</label>
                            <input class="form-control" id="inputTajuk" name="inputTajuk" type="text"
                                value="{{ $noc->tajuk_permohonan }}" placeholder="Masukkan tajuk permohonan..." />
                        </div>
                        <div class="mb-3">
                            <label class="small mb-1" for="inputTajuk">Kod MyProjek</label>
                            <input class="form-control" id="inputKodMyprojek" name="inputKodMyprojek" type="text"
                                value="{{ $noc->kod_myprojek }}" placeholder="Masukkan kod MyProjek.." />
                        </div>
                        <div class="mb-3">
                            <label class="small mb-1" for="inputTajuk">No. Rujukan Surat</label>
                            <input class="form-control" id="inputRujukan" name="inputRujukan" type="text"
                                value="{{ $noc->no_rujukan }}" placeholder="Masukkan nombor rujukan surat..." />
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
                            <label class="small mb-1" for="inputFirstName">Tarikh Surat Permohonan</label>
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
                            <select class="form-select" aria-label="Default select example" id="inputKlasifikasi"
                                name=" inputKlasifikasi">
                                <option selected disabled>Sila pilih:</option>
                                @foreach ($kategori as $data)
                                    <option value="{{ $data->kod }}"
                                        {{ $data->kod == $noc->klasifikasi ? 'selected' : '' }}> {{ $data->kod }} -
                                        {{ $data->nama_kat }} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="small mb-1">Bahagian</label>
                            <select class="form-select" aria-label="Default select example" id="inputBahagian"
                                name="inputBahagian">
                                <option selected disabled>Sila pilih:</option>
                                @foreach ($bahagian as $data)
                                    <option value="{{ $data->id }}"
                                        {{ $data->id == $noc->bahagian ? 'selected' : '' }}>
                                        {{ $data->sgktn_bhgn }} - {{ $data->nama_bhgn }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="small mb-1">Kementerian/Jabatan</label>
                            <select class="form-select" aria-label="Default select example" id="inputJabatan"
                                name="inputJabatan">
                                <option selected disabled>Sila pilih:</option>
                                @foreach ($kementerian as $data)
                                    <option value="{{ $data->id }}"
                                        {{ $data->id == $noc->kementerian ? 'selected' : '' }}>
                                        {{ $data->nama_jabatan }}
                                        ({{ $data->sgktn_jabatan }})
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        {{-- <div class="mb-3" hidden>
                                    <label class="small mb-1" for="statusNOC">Status NOC</label>
                                    <input class="form-control" id="statusNOC" name="statusNOC" type="text"
                                        placeholder="Status NOC" value="noc_1" />
                                </div> --}}
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
