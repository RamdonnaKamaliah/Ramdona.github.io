<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="{{ route('admin.dashboard') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">Interface</div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts"
                    aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Layouts
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                    data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('home.index') }}">Home</a>
                        <a class="nav-link" href="{{ route('about.index') }}">About</a>
                        <a class="nav-link" href="{{ route('skill.index') }}">Skill</a>
                        <a class="nav-link" href="{{ route('project.index') }}">Project</a>
                        <a class="nav-link" href="{{ route('certificate.index') }}">Certificate</a>
                        <a class="nav-link" href="{{ route('contact.index') }}">Contact</a>
                    </nav>
                </div>
                <a class="nav-link
                            collapsed" href="#" data-bs-toggle="collapse"
                    data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Pages
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePages" aria-labelledby="headingTwo"
                    data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                            Authentication
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="login.html">Login</a>
                                <a class="nav-link" href="register.html">Register</a>
                                <a class="nav-link" href="password.html">Forgot Password</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#pagesCollapseError" aria-expanded="false"
                            aria-controls="pagesCollapseError">
                            Error
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="401.html">401 Page</a>
                                <a class="nav-link" href="404.html">404 Page</a>
                                <a class="nav-link" href="500.html">500 Page</a>
                            </nav>
                        </div>
                    </nav>
                </div>
                <div class="sb-sidenav-menu-heading">Addons</div>
                <a class="nav-link" href="charts.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    Charts
                </a>
                <a class="nav-link" href="tables.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Tables
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            {{ Auth::user()->usertype }}
        </div>
        <style>
            /* Sidebar background color */
            .sb-sidenav-dark {
                background-color: #F8F9FA;
                /* Warna abu-abu terang/off-white */
            }

            /* Warna teks dalam sidebar */
            .sb-sidenav-dark .nav-link {
                color: #333333 !important;
                /* Teks hitam gelap */
            }

            /* Efek hover pada link */
            .sb-sidenav-dark .nav-link:hover {
                background-color: #95B1EE;
                /* Warna biru cerah untuk hover */
                color: #FFF;
                /* Teks putih saat hover */
            }

            /* Menyesuaikan ikon dalam sidebar */
            .sb-sidenav-dark .sb-nav-link-icon {
                color: #333333 !important;
                /* Warna abu-abu gelap untuk ikon */
            }

            /* Warna judul section dalam sidebar */
            .sb-sidenav-dark .sb-sidenav-menu-heading {
                color: #333333 !important;
                /* Warna abu-abu terang untuk heading */
            }

            /* Mengubah warna dropdown */
            .sb-sidenav-dark .collapse.show {
                background-color: #95B1EE;
            }

            /* Warna teks dalam dropdown */
            .sb-sidenav-dark .sb-sidenav-menu-nested .nav-link {
                color: #333333 !important;
                /* Teks dropdown abu-abu gelap */
            }

            /* Warna dropdown item saat hover */
            .sb-sidenav-dark .sb-sidenav-menu-nested .nav-link:hover {
                background-color: #95B1EE;
                /* Hijau cerah untuk hover */
                color: #FFF;
                /* Teks putih saat hover */
            }

            /* Warna footer sidebar */
            .sb-sidenav-footer {
                background-color: #1E90FF;
                /* Warna biru Dodger untuk footer */
                color: #FFF;
                /* Teks footer putih */
            }
        </style>

    </nav>
</div>
