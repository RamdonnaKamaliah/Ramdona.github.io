<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Home</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/table.css') }}">
</head>

<body class="sb-nav-fixed">
    <x-navbar-admin></x-navbar-admin>
    <nav class="sb-topnav navbar navbar-expand navbar-dark">
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="#!">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <x-sidebar></x-sidebar>
        </div>
        <div id="layoutSidenav_content">
            <div id="layoutSidenav_content">
                <main>
                    <div class="">
                        <h1 class="text-center" style="margin-top: 20px;">Certificate name</h1>
                        <form class="admin-form" action="{{ route('certificate.store') }}" method="POST"
                            enctype="multipart/form-data" style="max-width: 600px; margin: 0 auto;">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Name:</label>
                                <input type="text" id="name" name="name" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="issued_by" class="form-label">Issued By</label>
                                <input type="text" id="issued_by" name="issued_by" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="issued_at" class="form-label">Issued At</label>
                                <input type="date" id="issued_at" name="issued_at" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="file" class="form-label">File</label>
                                <input type="file" id="file" name="file" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea id="description" name="description" class="form-control" rows="5" required></textarea>
                            </div>
                            <div class="d-flex justify-content-between">
                                <button type="submit" class="btn-update">Submit</button>
                            </div>

                        </form>
                        <div>
                            <a href="{{ route('certificate.index') }}" class="btn btn-secondary">Back to List</a>
                        </div>
                    </div>
                </main>
            </div>
        </div>

</body>

</html>
