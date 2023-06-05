<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
    id="layout-navbar">
    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
            <i class="bx bx-menu bx-sm"></i>
        </a>
    </div>

    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
        <!-- Search -->
        <div class="navbar-nav align-items-center">
            <div class="nav-item d-flex align-items-center">
                <i class="bx bx-search fs-4 lh-0"></i>
                <input type="text" class="form-control border-0 shadow-none" placeholder="Search..."
                    aria-label="Search..." />
            </div>
        </div>
        <!-- /Search -->

        <ul class="navbar-nav flex-row align-items-center ms-auto">
            <!-- Place this tag where you want the button to render. -->
            <li class="nav-item lh-1 m-2" onclick="window.location.href='/dashboard/account-info'">
                @if ($online == 1)
                    <a class="github-button" data-icon="octicon-star">Yang Online Cuma Kamu!</a>
                @else
                    <a class="github-button" data-icon="octicon-star">{{ $online }} User - Online</a>
                @endif
            </li>

            <!-- User -->
            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar {{ $online ? 'avatar-online' : '' }}">
                        @foreach ($profile as $profiles)
                            <img src="{{ asset('storage/' . $profiles->logo_ponpes) }}" alt
                                class="w-px-40 h-auto rounded-circle" />
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <a class="dropdown-item" href="/dashboard/home">
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar {{ $online ? 'avatar-online' : '' }}">
                                        <img src="{{ asset('storage/' . $profiles->logo_ponpes) }}" alt
                                            class="w-px-40 h-auto rounded-circle" />
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <span class="fw-semibold d-block">{{ $profiles->nama_pesantren }}</span>
                                    <small class="text-muted">{{ auth()->user()->khodim->role }}</small>
                                </div>
                                @endforeach
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <a class="dropdown-item" href="/dashboard/profile">
                            <i class="bx bx-user me-2"></i>
                            <span class="align-middle">My Profile</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="/dashboard/#setting">
                            <i class="bx bx-cog me-2"></i>
                            <span class="align-middle">Settings</span>
                        </a>
                    </li>
                    <li>
                        @if (auth()->user()->khodim->role == 'Administrator')
                            <a class="dropdown-item" href="/dashboard/notify">
                                <span class="d-flex align-items-center align-middle">
                                    <i
                                        class="flex-shrink fa-solid fa-bell me-2 {{ $notif ? 'fa-shake' : '' }} mx-0"></i>
                                    @if ($notif)
                                        <span class="flex-grow-1 align-middle">New Notify</span>
                                        <span
                                            class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">{{ $notif }}</span>
                                    @else
                                        <span class="flex-grow-1 align-middle">Nothing Notify</span>

                                </span>
                            </a>
                    </li>
                    @endif
                    </span>
                    </a>
                    @endif
            </li>
            <li>
                <div class="dropdown-divider"></div>
            </li>
            <li>
                <a class="dropdown-item" href="/dashboard/logout">
                    <i class="bx bx-power-off me-2"></i>
                    Logout
                </a>
                </a>
            </li>
        </ul>
        </li>
        <!--/ User -->
        </ul>
    </div>
</nav>
