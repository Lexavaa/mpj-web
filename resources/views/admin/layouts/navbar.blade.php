<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="/home"><img src="{{ asset('dashboard/images/logo.png') }}"
                class="mr-2" alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href="/home"><img src="{{ asset('dashboard/images/logo-mini.png') }}"
                alt="logo" /></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav navbar-nav-right">
            @if (auth()->user()->khodim->role == 'ADMIN')
                @if ($title != 'Notifikasi')
                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
                            data-toggle="dropdown">
                            <i class="fa-solid fa-bell mx-0"></i>
                            @if ($notif)
                                <span class="count"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                            aria-labelledby="notificationDropdown">
                            <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-info">
                                        <i class="ti-user mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content" onclick="window.location.href='/notify-list'">
                                    <h6 class="preview-subject font-weight-normal text-dark">New user registration</h6>
                                    <p class="font-weight-light small-text mb-0 text-muted">
                                        {{ $notif }}
                                    </p>
                                </div>
                            </a>
                        </div>
                    </li>
                @else
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                        aria-labelledby="notificationDropdown">
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject font-weight-normal text-dark">Tidak Ada Notifikasi</h6>
                            </div>
                        </a>
                    </div>
                    </li>
                @endif
            @endif{{--  --}}
            @endif
            <li class="nav-item nav-profile dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                    @foreach ($profile as $profiles)
                        <img src="{{ asset('storage/' . $profiles->logo_ponpes) }}" class="w-100" alt="profile" />
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                    <a class="dropdown-item">
                        <i class="fa fa-user text-primary"></i>
                        {{ $profiles->nama_pesantren }}
                    </a>
                    <a class="dropdown-item">
                        <i class="ti-settings text-primary"></i>
                        Settings
                    </a>
                    <form action="/logout" method="post">
                        @csrf
                        <a class="dropdown-item">
                            <i class="ti-power-off text-primary"></i>
                            <button type="submit" style="border:none; background-color:transparent;">Logout</button>
                        </a>
                </div>
                @endforeach
                </form>
            </li>
            <li class="nav-item nav-settings d-none d-lg-flex">
                <a class="nav-link" href="#">
                    <i class="icon-ellipsis"></i>
                </a>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
            data-toggle="offcanvas">
            <span class="icon-menu"></span>
        </button>
    </div>
</nav>
