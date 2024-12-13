<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - Admin Ramdona</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <x-navbar-admin></x-navbar-admin>
    <div id="layoutSidenav">
        <x-sidebar></x-sidebar>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Dashboard</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-blue-light text-white mb-4">
                                <div class="card-body">Tabel About</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="{{ route('about.index') }}">View
                                        Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-blue-dark text-white mb-4">
                                <div class="card-body">Tabel Skill</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="{{ route('skill.index') }}">View
                                        Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-cream text-dark mb-4">
                                <div class="card-body">Tabel Project</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-dark stretched-link" href="{{ route('project.index') }}">View
                                        Details</a>
                                    <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-green-light text-dark mb-4">
                                <div class="card-body">Table Certificate</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-dark stretched-link"
                                        href="{{ route('certificate.index') }}">View Details</a>
                                    <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <style>
                    .bg-blue-light {
                        background-color: #95B1EE;
                        /* Warna biru muda */
                    }

                    .bg-blue-dark {
                        background-color: #364C84;
                        /* Warna biru tua */
                    }

                    .bg-cream {
                        background-color: #FFFDF5;
                        /* Warna putih krem */
                        color: #333;
                        /* Warna teks gelap untuk kontras */
                    }

                    .bg-green-light {
                        background-color: #E7F1A8;
                        /* Warna hijau muda */
                        color: #333;
                        /* Warna teks gelap untuk kontras */
                    }

                    .card-footer a {
                        transition: color 0.3s;
                    }

                    .card-footer a:hover {
                        color: #1a73e8;
                        /* Warna hover untuk teks link */
                    }
                </style>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2023</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>
