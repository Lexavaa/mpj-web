<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="/home">
                <i class="fa fa-dashboard menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="fa fa-id-card menu-icon"></i>
                <span class="menu-title">Data Profil</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link {{ $title == 'Data' ? 'text-dark font-weight-bold' : '' }}"
                            href="/data/media">Data Media</a>
                    </li>
                    <li class="nav-item"> <a
                            class="nav-link {{ $title == 'Data Lengkap Media' ? 'text-dark font-weight-bold' : '' }}"
                            href="/data-lengkap/media">Data Lengkap
                            Media</a></li>
                    <li class="nav-item"> <a class="nav-link {{ $title == 'Crew' ? 'text-dark font-weight-bold' : '' }}"
                            href="/crew">Data Kru
                            Media</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/pay-in">
                <i class="fa fa-money-bill-1-wave menu-icon"></i>
                <span class="menu-title">Bayar Iuran</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/pay-out">
                <i class="fa fa-money-bill-1-wave menu-icon"></i>
                <span class="menu-title">Lihat Iuran</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/regional">
                <i class="fa fa-flag menu-icon"></i>
                <span class="menu-title">Tambah Regional</span>
            </a>
        </li>
    </ul>
</nav>
