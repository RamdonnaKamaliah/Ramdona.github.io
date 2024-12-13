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
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html">Start Bootstrap</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..."
                    aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i
                        class="fas fa-search"></i></button>
            </div>
        </form>
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
                    <div class="container">
                        <h1 class="text-center" style="margin-top: 20px;">Create Home</h1>
                        <form class="admin-form" action="{{ route('home.store') }}" method="POST"
                            enctype="multipart/form-data" style="max-width: 600px; margin: 0 auto;">
                            @csrf
                            <div>
                                <label for="title" class="form-label">Title:</label>
                                <input type="text" id="title" name="title" class="form-input" required>
                            </div>
                            <div>
                                <label for="subtitle" class="form-label">SubTitle:</label>
                                <input type="text" id="subtitle" name="subtitle" class="form-input" required>
                            </div>
                            <div>
                                <label for="description" class="form-label">Description:</label>
                                <textarea name="description" id="description" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="picture" class="form-label">Picture:</label>
                                <input type="file" id="picture" name="picture" class="form-control">
                            </div>
                            <div class="d-flex justify-content-between">
                                <button type="submit" class="btn-update">Create</button>
                                <a href="{{ route('home.index') }}" class="btn btn-secondary">Back to list</a>
                            </div>
                        </form>
                    </div>
                </main>
            </div>
        </div>

</body>

</html>
