<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    <link rel="stylesheet" href="//cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/table.css') }}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <x-navbar-admin></x-navbar-admin>
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">

        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" hrsef="index.html">Start Bootstrap</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
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
            <main>
                <a href="{{ route('certificate.create') }}" style="margin: 1.rem 0 0 1.25rem;">
                    <button class="btn-update" style="margin-left: 15px; margin-top:15px;">
                        <span>Add certificate</span>
                    </button>
                </a>
                <div class="body">
                    <div id="table-container" class="table-container">
                        <table class="modern-table" id="myTable">
                            <thead>
                                <tr>

                                    <th>No</th>
                                    <th>Title</th>
                                    <th>Issued By</th>
                                    <th>Issued At</th>
                                    <th>Descriptions</th>
                                    <th>File</th>
                                    <th>Action</th>

                                    {{-- <th scope="col">Descriptions<th>-- --}}
                                    <th scope="col" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($certificate as $row)
                                    <tr>

                                        <td>{{ $row->id }}</td>
                                        <td>{{ $row->name }}</td>
                                        <td>{{ $row->issued_by }}</td>
                                        <td>{{ $row->issued_at }}</td>
                                        <td>{{ $row->description }}</td>

                                        <td>
                                            @if ($row->file)
                                                <a href="{{ asset('storage/' . $row->file) }}" class="btn-update"
                                                    target="_blank">View Certificate</a>
                                            @else
                                                <span>No file uploaded</span>
                                            @endif
                                        </td>



                                        <td align="center">
                                            <a href="{{ route('certificate.edit', $row->id) }}">
                                                <button class="btn-update">Update</button>
                                            </a>
                                        </td>

                                        <td align="center">
                                            {{-- <form action="{{ route('certificate.destroy', $row->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" class="btn btn-sm btn-outline-danger"
                                                    onclick="deleted(this)">Delete</button>
                                            </form> --}}
                                            <form action="{{ route('certificate.destroy', $row->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>

                    </div>
                </div>
            </main>
</body>

</html>
