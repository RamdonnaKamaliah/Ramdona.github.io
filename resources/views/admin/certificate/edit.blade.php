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
                    <div class="container mt-5">
                        <h1 class="text-center mb-4">Edit Certificate</h1>
                        <div class="card p-4 shadow-lg rounded-form">
                            <form action="{{ route('certificate.update', $certificate->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="form-group mb-4">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" name="name" value="{{ $certificate->name }}"
                                        class="form-control modern-input" required>
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group mb-4">
                                    <label for="issued_by" class="form-label">Issued By</label>
                                    <input type="text" name="issued_by" value="{{ $certificate->issued_by }}"
                                        class="form-control modern-input" required>
                                    @error('issued_by')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group mb-4">
                                    <label for="issued_at" class="form-label">Issued At</label>
                                    <input type="date" name="issued_at" value="{{ $certificate->issued_at }}"
                                        class="form-control modern-input" required>
                                    @error('issued_at')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>


                                <div class="form-group mb-4">
                                    <label for="file" class="form-label">Upload New File</label>
                                    <input type="file" name="file" class="form-control modern-input">
                                    @error('file')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                    @if ($certificate->file)
                                        <p class="mt-2">Current File:</p>
                                        <a href="{{ asset('storage/' . $certificate->file) }}" class="btn btn-info"
                                            target="_blank">View Current Certificate</a>
                                    @endif
                                </div>

                                <div class="form-group mb-4">
                                    <label for="image" class="form-label">Upload Image</label>
                                    <input type="file" name="image" class="form-control modern-input">
                                    @error('image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                    @if ($certificate->description)
                                        <p class="mt-2">Current Description:</p>
                                        <textarea name="description" rows="4"
                                            class="w-full border-gray-300 rounded-md focus:ring focus:ring-blue-500 focus:border-blue-500">
        {{ $certificate->description }}
    </textarea>
                                    @endif

                                </div>

                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-modern"
                                        style="background-color: #b7229a; color: white;">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </main>
            </div>
        </div>

</body>

</html>
