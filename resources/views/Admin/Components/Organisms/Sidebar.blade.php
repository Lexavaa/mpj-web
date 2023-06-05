<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="/dashboard/home" class="app-brand-link">
            <span class="demo">
            </span>
            <span class=" fw-bolder ms-2 img-fluid">
              <img src="{{ asset('admin-assets/img/icons/mpj.png') }}" style="width:120px !important;" alt="">
            </span>
        </a>
        <a href="/dashboard/home" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    {{-- MENU UTAMA! --}}
    <ul class="menu-inner py-1">
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Menu Utama</span>
        </li>

        <li class="menu-item {{ (($title == 'Dashboard') ? 'active' : '') }}">
            <a href="/dashboard/home" class="menu-link">
                <i class="menu-icon tf-icons fa fa-home"></i>
                <div data-i18n="Dashboard">Dashboard</div>
            </a>
        </li>

        <li class="menu-item  {{ (($title == 'Profil Pengguna' || $title == 'Data Pengguna') ? ' active' : '') }}">
            <a href="/dashboard/javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons fa fa-gear"></i>
                <div data-i18n="Setting">Pengaturan</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="/dashboard/profile" class="menu-link {{ (($title == 'Profil Pengguna') ? ' text-info' : '') }}">
                        <div data-i18n="Without menu">Profil Pengguna</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="/dashboard/profile-data" class="menu-link {{ (($title == 'Data Pengguna') ? ' text-info' : '') }}">
                        <div data-i18n="Without navbar">Data Pengguna</div>
                    </a>
                </li>
            </ul>
        </li>

        {{-- TAMBAH DATA --}}
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Tambah Data</span>
        </li>
        <li class="menu-item">
            <a href="/dashboard/javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons fa fa-box-archive"></i>
                <div data-i18n="Setting">Aset pesantren</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="/dashboard/profile" class="menu-link">
                        <div data-i18n="Without menu">Fasilitas</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="/dashboard/full-data" class="menu-link">
                        <div data-i18n="Without navbar">Unit</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="/dashboard/cards-basic.html" class="menu-link">
                <i class="menu-icon tf-icons fa fa-calendar-days"></i>
                <div data-i18n="Basic">Jadwal Kegiatan</div>
            </a>
        </li>
        <li class="menu-item {{ (($title == 'Data Kru') ? 'active' : '') }}">
            <a href="/dashboard/crew" class="menu-link">
                <i class="menu-icon tf-icons fa fa-user-check"></i>
                <div data-i18n="Basic">Kru Media</div>
            </a>
        </li>
        <li class="menu-item {{ (($title == 'Regional') ? 'active' : '') }}">
            <a href="/dashboard/regional" class="menu-link">
                <i class="menu-icon tf-icons fa fa-location-dot"></i>
                <div data-i18n="Basic">Regional</div>
            </a>
        </li>


        <li class="menu-header small text-uppercase"><span class="menu-header-text">Layanan Lainnya</span></li>
        <!-- Cards -->
        <li class="menu-item">
            <a href="/dashboard/cards-basic.html" class="menu-link">
                <i class="menu-icon tf-icons fa fa-certificate"></i>
                <div data-i18n="Basic">Piagam Media</div>
            </a>
        </li>
        <li class="menu-item {{ (($title == 'ID Card') ? 'active' : '') }}">
            <a href="/dashboard/transaction" class="menu-link">
                <i class="menu-icon tf-icons fa fa-id-card"></i>
                <div data-i18n="Boxicons">ID Card</div>
            </a>
        </li>
        <li class="menu-item {{ (($title == 'Info ID Card') ? 'active' : '') }}">
            <a href="/dashboard/transaction-info" class="menu-link">
                <i class="menu-icon tf-icons fa fa-id-card"></i>
                <div data-i18n="Boxicons">Info ID Card</div>
            </a>
        </li>
        <li class="menu-item {{ (($title == 'Team' || $title == 'Regional' || $title == 'Pesantren') ? 'active' : '') }}">
            <a href="/dashboard/javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons fa fa-id-badge"></i>
                <div data-i18n="Setting">Keanggotaan</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="/dashboard/sub-data" class="menu-link {{ (($title == 'Regional') ? 'text-info' : '') }}">
                        <div data-i18n="Without menu">Data Regional</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="/dashboard/sub-data" class="menu-link {{ (($title == 'Pesantren') ? 'text-info' : '') }}">
                        <div data-i18n="Without menu">Data Pesantren</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="/dashboard/team" class="menu-link {{ (($title == 'Team') ? 'text-info' : '') }}">
                        <div data-i18n="Without navbar">Data Kru</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-header small text-uppercase" id="setting"><span class="menu-header-text">Communication</span></li>
        <li class="menu-item">
            <a href="/dashboard/https://github.com/themeselection/sneat-html-admin-template-free/issues" target="_blank"
                class="menu-link">
                <i class="menu-icon tf-icons fa fa-headset"></i>
                <div data-i18n="Support">Support</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="/dashboard/https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
                target="_blank" class="menu-link">
                <i class="menu-icon tf-icons fa fa-book"></i>
                <div data-i18n="Documentation">Documentation</div>
            </a>
        </li>

        <li class="menu-header small text-uppercase"><span class="menu-header-text">Setting</span></li>
        <li class="menu-item">
          <a href="/dashboard/cards-basic.html" class="menu-link">
              <i class="menu-icon tf-icons fa fa-users"></i>
              <div data-i18n="Basic">Hak Akses</div>
          </a>
      </li>
      <li class="menu-item">
        <a href="/dashboard/cards-basic.html" class="menu-link">
            <i class="menu-icon tf-icons fa fa-network-wired"></i>
            <div data-i18n="Basic">Info Aplikasi</div>
        </a>
    </li>
    <li class="menu-item">
      <a href="/dashboard/cards-basic.html" class="menu-link">
          <i class="menu-icon tf-icons fa fa-user"></i>
          <div data-i18n="Basic">Info Pengguna</div>
      </a>
  </li>
    <li class="menu-item">
      <a href="/dashboard/logout" class="menu-link">
          <i class="menu-icon tf-icons fa fa-arrow-right-from-bracket"></i>
          <div data-i18n="Basic">Logout</div>
      </a>
  </li>
    </ul>
</aside>
