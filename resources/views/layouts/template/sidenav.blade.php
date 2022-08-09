<nav class="sidenav shadow-right sidenav-light">
    <div class="sidenav-menu">
        <div class="nav accordion" id="accordionSidenav">
            <!-- Sidenav Menu Heading (Account)-->
            <!-- * * Note: * * Visible only on and above the sm breakpoint-->
            {{-- <div class="sidenav-menu-heading d-sm-none">Account</div>
            <!-- Sidenav Link (Alerts)-->
            <!-- * * Note: * * Visible only on and above the sm breakpoint-->
            <a class="nav-link d-sm-none" href="#!">
                <div class="nav-link-icon"><i data-feather="bell"></i></div>
                Alerts
                <span class="badge bg-warning-soft text-warning ms-auto">4 New!</span>
            </a>
            <!-- Sidenav Link (Messages)-->
            <!-- * * Note: * * Visible only on and above the sm breakpoint-->
            <a class="nav-link d-sm-none" href="#!">
                <div class="nav-link-icon"><i data-feather="mail"></i></div>
                Messages
                <span class="badge bg-success-soft text-success ms-auto">2 New!</span>
            </a> --}}
            @if (Auth::user()->peranan == 1)
                <!-- Sidenav Heading (Admin)-->
                <div class="sidenav-menu-heading">Admin</div>
                <!-- Sidenav Link (Dashboard)-->
                <a class="nav-link" href="{{ route('home') }}">
                    <div class="nav-link-icon"><i data-feather="pie-chart"></i></div>
                    Dashboard
                </a>
                <!-- Sidenav Link (Senarai NOC)-->
                <a class="nav-link" href="{{ route('noc.index') }}">
                    <div class="nav-link-icon"><i data-feather="list"></i></div>
                    Senarai NOC
                </a>
                <!-- Sidenav Accordion (Data)-->
                <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse"
                    data-bs-target="#collapseData" aria-expanded="false" aria-controls="collapseData">
                    <div class="nav-link-icon"><i data-feather="database"></i></div>
                    Tetapan
                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseData" data-bs-parent="#accordionSidenav">
                    <nav class="sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('pengguna.index') }}">Pengguna</a>
                        <a class="nav-link" href="{{ route('bahagian.index') }}">Bahagian</a>
                        <a class="nav-link" href="{{ route('kementerian.index') }}">Kementerian</a>
                        <a class="nav-link" href="{{ route('peringkat.index') }}">Peringkat</a>
                        <a class="nav-link" href="{{ route('kategori.index') }}">Kategori</a>
                        <a class="nav-link" href="{{ route('peranan.index') }}">Peranan</a>
                        <a class="nav-link" href="{{ route('status.index') }}">Status NOC</a>
                    </nav>
                </div>
            @endif

            @if (Auth::user()->peranan == 2)
                <!-- Sidenav Heading (Bahagian)-->
                <div class="sidenav-menu-heading">Bahagian</div>
                <!-- Sidenav Link (Dashboard)-->
                <a class="nav-link" href="{{ route('home') }}">
                    <div class="nav-link-icon"><i data-feather="pie-chart"></i></div>
                    Dashboard
                </a>
                <!-- Sidenav Accordion (Tindakan)-->
                <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse"
                    data-bs-target="#collapseTindakan" aria-expanded="true" aria-controls="collapseTindakan">
                    <div class="nav-link-icon"><i data-feather="edit"></i></div>
                    Tindakan <span @if (count_tindakan() == 0) hidden @endif
                        class="mx-2 p-2 badge rounded-pill bg-danger">{{ count_tindakan() }}</span>
                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseTindakan" data-bs-parent="#accordionSidenav">
                    <nav class="sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('noc.tindakan') }}">NOC untuk tindakan <span
                                @if (count_tindakan() == 0) hidden @endif
                                class="mx-2 p-2 badge rounded-pill bg-danger">{{ count_tindakan() }}</span></a>
                    </nav>
                    <nav class="sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('noc.create') }}">Permohonan baru</a>
                    </nav>
                </div>
                <!-- Sidenav Link (Senarai NOC)-->
                <a class="nav-link" href="{{ route('noc.index') }}">
                    <div class="nav-link-icon"><i data-feather="list"></i></div>
                    Senarai NOC
                </a>
            @endif

            @if (Auth::user()->peranan == 3)
                <!-- Sidenav Heading (Bajet)-->
                <div class="sidenav-menu-heading">Bajet</div>
                <!-- Sidenav Link (Dashboard)-->
                <a class="nav-link" href="{{ route('home') }}">
                    <div class="nav-link-icon"><i data-feather="pie-chart"></i></div>
                    Dashboard
                </a>
                <!-- Sidenav Link (Tindakan)-->
                <a class="nav-link" href="{{ route('noc.tindakan') }}">
                    <div class="nav-link-icon"><i data-feather="edit"></i></div>
                    Tindakan <span @if (count_tindakan() == 0) hidden @endif
                        class="mx-2 p-2 badge rounded-pill bg-danger">{{ count_tindakan() }}</span>
                </a>
                <!-- Sidenav Link (Senarai NOC)-->
                <a class="nav-link" href="{{ route('noc.index') }}">
                    <div class="nav-link-icon"><i data-feather="list"></i></div>
                    Senarai NOC
                </a>
            @endif

            @if (Auth::user()->peranan == 4)
                <!-- Sidenav Heading (Nilai)-->
                <div class="sidenav-menu-heading">Nilai</div>
                <!-- Sidenav Link (Dashboard)-->
                <a class="nav-link" href="{{ route('home') }}">
                    <div class="nav-link-icon"><i data-feather="pie-chart"></i></div>
                    Dashboard
                </a>
                <!-- Sidenav Link (Tindakan)-->
                <a class="nav-link" href="{{ route('noc.tindakan') }}">
                    <div class="nav-link-icon"><i data-feather="edit"></i></div>
                    Tindakan <span @if (count_tindakan() == 0) hidden @endif
                        class="mx-2 p-2 badge rounded-pill bg-danger">{{ count_tindakan() }}</span>
                </a>
                <!-- Sidenav Link (Senarai NOC)-->
                <a class="nav-link" href="{{ route('noc.index') }}">
                    <div class="nav-link-icon"><i data-feather="list"></i></div>
                    Senarai NOC
                </a>
            @endif


        </div>
    </div>
    <!-- Sidenav Footer-->
    <div class="sidenav-footer">
        <div class="sidenav-footer-content">
            <div class="sidenav-footer-subtitle">
                <label>Peranan:</label>
                <label class="px-1 bg-secondary text-white rounded">
                    @if (Auth::user()->peranan == 1)
                        admin
                    @elseif (Auth::user()->peranan == 2)
                        bahagian
                    @elseif (Auth::user()->peranan == 3)
                        bajet
                    @else
                        nilai
                    @endif
                </label>
            </div>
            <div class="sidenav-footer-title">
                <div class="sidenav-footer-subtitle text-dark">
                    <strong>{{ Auth::user()->name }}</strong>
                    @include('layouts.template.bhgn')
                </div>
            </div>
        </div>
    </div>
</nav>
