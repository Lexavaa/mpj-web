<x-ResourcesLayout :title="$title">
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <x-Sidebarorganism :title="$title" />
            <div class="layout-page">
                <x-Navbarorganism :notif="$notif"/>
                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        {{ $slot }}
                    </div>
                </div>
                <footer class="footer bg-light">
                    <div
                        class="container-fluid d-flex flex-md-row flex-column justify-content-between align-items-md-center gap-1 container-p-x py-3">
                        <div>
                            <a href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/landing/"
                                target="_blank" class="footer-text fw-bolder">MPJ-CODERSTEAM</a>
                            © <?php echo date('Y'); ?> Dibuat Dengan Nikmatnya ☕
                        </div>
                        <div>
                        </div>
                        <a href="/logout">
                            <button style="border:none; background:transparent;"><i
                                    class="fa fa-arrow-right-from-bracket"></i> Logout</button></form>
                        </a>
                    </div>
            </div>
            </footer>
            <div class="content-backdrop fade"></div>
        </div>
    </div>
    <div class="layout-overlay layout-menu-toggle"></div>
    </x-ResourceLayout>
