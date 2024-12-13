<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/table.css') }}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
    <script src="//cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>
    <title>Document</title>
</head>

<body class="sb-nav-fixed">
    <x-navbar-admin></x-navbar-admin>
    <nav class="sb-topnav navbar navbar-expand navbar-dark" style="background: ">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html">Start Bootstrap</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!">
            <i class="fas fa-bars"></i>
        </button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..."
                    aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button">
                    <i class="fas fa-search"></i>
                </button>
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
                <a href="{{ route('home.create') }}" style="float: right; margin: 1.30rem;">
                    <button class="btn-update">
                        <span>Add Home</span>
                    </button>
                </a>
                <div class="body">
                    <div id="table-container" class="table-container">
                        <table class="modern-table" id="myTable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Subtitle</th>
                                    <th>Description</th>
                                    <th>Picture</th>
                                    <th>Action</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($homes as $index => $row)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $row->title }}</td>
                                        <td>{{ $row->subtitle }}</td>
                                        <td>{{ $row->description }}</td>
                                        <td>
                                            <img src="{{ asset('storage/' . $row->picture) }}" alt=""
                                                style="width: 50px">
                                        </td>
                                        <!-- Tombol Update -->
                                        <td align="center">
                                            <a href="{{ route('home.edit', $row) }}">
                                                <button class="btn-update">Update</button>
                                            </a>
                                        </td>
                                        <!-- Tombol Delete -->
                                        <td align="center">
                                            <form action="{{ route('home.destroy', $row) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-warning">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
        </script>
        <script src="{{ asset('asset-landing-page/js/scripts-admin.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
            crossorigin="anonymous"></script>
        <script src="{{ asset('asset-landing-page/js/datatables-simple-demo.js') }}"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="//cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            @if (session('added'))
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: 'berhasil menambah data',
                    showConfirmButton: false,
                    timer: 1500
                });
            @endif

            @if (session('edited'))
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: 'berhasil mengedit data',
                    showConfirmButton: false,
                    timer: 1500
                });
            @endif

            function deleted(button) {
                const swalWithBootstrapButtons = Swal.mixin({
                    customClass: {
                        confirmButton: "btn btn-success",
                        cancelButton: "btn btn-danger"
                    },
                    buttonsStyling: false
                });
                swalWithBootstrapButtons.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonText: "Yes, delete it!",
                    cancelButtonText: "No, cancel!",
                    reverseButtons: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        swalWithBootstrapButtons.fire({
                            title: "Deleted!",
                            text: "Your file has been deleted.",
                            icon: "success"
                        });
                    } else if (
                        /* Read more about handling dismissals below */
                        result.dismiss === Swal.DismissReason.cancel
                    ) {
                        swalWithBootstrapButtons.fire({
                            title: "Cancelled",
                            text: "Your imaginary file is safe :)",
                            icon: "error"
                        });
                    }
                });
            }

            @if (session('deleted'))
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: 'berhasil mengedit data',
                    showConfirmButton: false,
                    timer: 1500
                });
            @endif
        </script>
        <script>
            $(document).ready(function() {
                $('#myTable').DataTable();
            });
        </script>
</body>

</body>

</html>
