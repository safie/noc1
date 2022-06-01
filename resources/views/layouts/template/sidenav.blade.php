<nav class="sidenav shadow-right sidenav-light">
    <div class="sidenav-menu">
        <div class="nav accordion" id="accordionSidenav">
            <!-- Sidenav Menu Heading (Account)-->
            <!-- * * Note: * * Visible only on and above the sm breakpoint-->
            <div class="sidenav-menu-heading d-sm-none">Account</div>
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
            </a>
            <!-- Sidenav Heading (Admin)-->
            <div class="sidenav-menu-heading">Admin</div>
            <!-- Sidenav Link (Dashboard)-->
            <a class="nav-link" href="tables.html">
                <div class="nav-link-icon"><i data-feather="pie-chart"></i></div>
                Dashboard
            </a>
            <!-- Sidenav Link (Senarai NOC)-->
            <a class="nav-link" href="tables.html">
                <div class="nav-link-icon"><i data-feather="list"></i></div>
                Senarai NOC
            </a>
            <!-- Sidenav Accordion (Data)-->
            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse"
                data-bs-target="#collapseData" aria-expanded="false" aria-controls="collapseData">
                <div class="nav-link-icon"><i data-feather="database"></i></div>
                Data
                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseData" data-bs-parent="#accordionSidenav">
                <nav class="sidenav-menu-nested nav">
                    <a class="nav-link" href="{{ route('pengguna.index') }}">Pengguna</a>
                    <a class="  nav-link" href="background.html">Bahagian</a>
                    <a class="nav-link" href="borders.html">Kementerian</a>
                    <a class="nav-link" href="lift.html">Peringkat</a>
                    <a class="nav-link" href="shadows.html">Kategori</a>
                    <a class="nav-link" href="{{ route('peranan.index') }}">Peranan</a>
                </nav>
            </div>
            <!-- Sidenav Heading (Admin)-->
            <div class="sidenav-menu-heading">Bahagian</div>
            <!-- Sidenav Link (Dashboard)-->
            <a class="nav-link" href="tables.html">
                <div class="nav-link-icon"><i data-feather="pie-chart"></i></div>
                Dashboard
            </a>
            <!-- Sidenav Accordion (Tindakan)-->
            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse"
                data-bs-target="#collapseTindakan" aria-expanded="false" aria-controls="collapseTindakan">
                <div class="nav-link-icon"><i data-feather="edit"></i></div>
                Tindakan
                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseTindakan" data-bs-parent="#accordionSidenav">
                <nav class="sidenav-menu-nested nav">
                    <a class="nav-link" href="animations.html">Permohonan baru</a>
                </nav>
            </div>
            <!-- Sidenav Link (Senarai NOC)-->
            <a class="nav-link" href="tables.html">
                <div class="nav-link-icon"><i data-feather="list"></i></div>
                Senarai NOC
            </a>
            <!-- Sidenav Heading (Admin)-->
            <div class="sidenav-menu-heading">Bajet</div>
            <!-- Sidenav Link (Dashboard)-->
            <a class="nav-link" href="tables.html">
                <div class="nav-link-icon"><i data-feather="pie-chart"></i></div>
                Dashboard
            </a>
            <!-- Sidenav Link (Tindakan)-->
            <a class="nav-link" href="tables.html">
                <div class="nav-link-icon"><i data-feather="edit"></i></div>
                Tindakan
            </a>
            <!-- Sidenav Link (Senarai NOC)-->
            <a class="nav-link" href="tables.html">
                <div class="nav-link-icon"><i data-feather="list"></i></div>
                Senarai NOC
            </a>
            <!-- Sidenav Heading (Admin)-->
            <div class="sidenav-menu-heading">Nilai</div>
            <!-- Sidenav Link (Dashboard)-->
            <a class="nav-link" href="tables.html">
                <div class="nav-link-icon"><i data-feather="pie-chart"></i></div>
                Dashboard
            </a>
            <!-- Sidenav Link (Tindakan)-->
            <a class="nav-link" href="tables.html">
                <div class="nav-link-icon"><i data-feather="edit"></i></div>
                Tindakan
            </a>
            <!-- Sidenav Link (Senarai NOC)-->
            <a class="nav-link" href="tables.html">
                <div class="nav-link-icon"><i data-feather="list"></i></div>
                Senarai NOC
            </a>


        </div>
    </div>
    <!-- Sidenav Footer-->
    <div class="sidenav-footer">
        <div class="sidenav-footer-content">
            <div class="sidenav-footer-subtitle">Logged in as:</div>
            <div class="sidenav-footer-title">{{ Auth::user()->name }} ({{ Auth::user()->peranan }})</div>
        </div>
    </div>
</nav>
