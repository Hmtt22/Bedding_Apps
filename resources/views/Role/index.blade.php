<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Manage your roles easily in this application.">
    <meta name="keywords" content="Role Management, Laravel, Dashboard">
    <meta name="author" content="CodedThemes">
    <title>Bedding Apps</title>
    <link rel="icon" href="../assets/images/favicon.svg" type="image/x-icon">

    <!-- Fonts & Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" href="../assets/fonts/tabler-icons.min.css">
    <link rel="stylesheet" href="../assets/fonts/feather.css">
    <link rel="stylesheet" href="../assets/fonts/fontawesome.css">

    <!-- CSS Template -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/style-preset.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        /* Tombol Edit */
        .edit-btn {
            display: inline-flex;
            align-items: center;
            background-color: #f39c12;
            color: white;
            font-size: 18px;
            padding: 12px 24px;
            border-radius: 25px;
            box-shadow: 3px 3px 6px rgba(0, 0, 0, 0.2);
            text-decoration: none;
            transition: all 0.3s ease;
        }
        .edit-btn:hover {
            background-color: #e67e22;
            transform: translateY(-4px);
            box-shadow: 6px 6px 10px rgba(0, 0, 0, 0.3);
        }
        .edit-btn i {
            margin-right: 8px;
            font-size: 20px;
        }

        /* Tombol Delete */
        .delete-btn {
            display: inline-flex;
            align-items: center;
            background-color: #e74c3c;
            color: white;
            font-size: 20px;
            padding: 10px 16px;
            border-radius: 50px;
            box-shadow: 3px 3px 6px rgba(0, 0, 0, 0.1);
            text-decoration: none;
            transition: all 0.3s ease;
        }
        .delete-btn:hover {
            background-color: #c0392b;
            transform: translateY(-4px);
            box-shadow: 6px 6px 12px rgba(0, 0, 0, 0.2);
        }
        .delete-btn i {
            margin-right: 8px;
            font-size: 22px;
        }
    </style>
</head>
<body data-pc-preset="preset-1" data-pc-direction="ltr" data-pc-theme="light">

    @include('partials.sidebar')
    @include('partials.navbar')

    <div class="pc-container">
        <div class="pc-content">
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <div class="page-header-title">
                                    <ul class="breadcrumb" style="font-size: 22px; font-weight: 570; ">
                                        <li class="breadcrumb-item"><a href="{{ route('layouts.index') }}">Dashboard</a></li>
                                        <li class="breadcrumb-item" aria-current="page">Management Role</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Peringatan!</strong> {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Tutup"></button>
                </div>
            @endif

            <div class="container">
                <div class="card mt-5">
                    <div class="card-header p-3 d-flex justify-content-start">
                        {{-- <a href="{{ route('roles.create') }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-plus"></i> Create Role
                        </a> --}}
                        <button type="button" class="btn btn-primary mb-3"
                            data-bs-toggle="modal" data-bs-target="#createBuildingModal">
                            + Create New Role
                        </button>
                    </div>
                    <div class="card-body">
                        <table id="myTable" class="display">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Role</th>
                                    <th>Description</th>
                                    <th>Created</th>
                                    <th>Updated</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($roles as $role)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $role->role }}</td>
                                        <td>{{ $role->description }}</td>
                                        <td>{{ $role->created_at->setTimezone('Asia/Jakarta')->translatedFormat('l, d F Y, H:i') }}</td>
                                        <td>{{ $role->updated_at->setTimezone('Asia/Jakarta')->translatedFormat('l, d F Y, H:i') }}</td>
                                        <td>
                                            <a href="{{ route('roles.edit', $role->id) }}" class="edit-btn"
                                                style="background-color:#1cc88a;
                                                color:white;
                                                padding:6px 14px;
                                                border-radius:20px;
                                                text-decoration:none;
                                                font-size:14px;
                                                display:inline-block;
                                                margin-right:5px;">
                                                Edit</a>
                                                
                                            <form action="{{ route('roles.destroy', $role->id) }}" method="POST" style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="delete-btn" onclick="return confirm('Apakah Anda yakin ingin menghapus data role ini?')"
                                                 style="background-color:#e74a3b;
                                                color:white;
                                                padding:6px 14px;
                                                border-radius:20px;
                                                border:none;
                                                font-size:14px;
                                                cursor:pointer;">
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
            </div>

        </div>
    </div>

    <!-- === MODAL CREATE BUILDING === -->
            <div class="modal fade" id="createBuildingModal" tabindex="-1"
                 aria-labelledby="createBuildingModalLabel" aria-hidden="true">

                <div class="modal-dialog modal-lg">
                    <div class="modal-content">

                        <div class="modal-header">
                            <h5 class="modal-title" id="createBuildingModalLabel">Create New Role</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <form action="{{ route('roles.store') }}" method="POST">
                            @csrf

                            <div class="modal-body">

                                <div class="mb-3">
                                    <label class="form-label fw-bold">Role</label>
                                    <input type="text" name="role" class="form-control"
                                           placeholder="Enter building name" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-bold">Description</label>
                                    <textarea name="description" class="form-control" rows="4"
                                              placeholder="Describe the building" required></textarea>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>

                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <!-- === END MODAL === -->

    <footer class="pc-footer">
        <div class="footer-wrapper container-fluid">
            <div class="row">
                <div class="col-sm my-1"></div>
            </div>
        </div>
    </footer>

    <script src="../assets/js/plugins/popper.min.js"></script>
    <script src="../assets/js/plugins/simplebar.min.js"></script>
    <script src="../assets/js/plugins/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/feather.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable({
                language: {
                    search: "🔍 Search:",
                    lengthMenu: "_MENU_ entries per page",
                    info: "Showing _START_ to _END_ of _TOTAL_ entries",
                    paginate: { previous: "Previous", next: "Next" },
                    zeroRecords: "No data found"
                }
            });
        });

        @if(session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: '{{ session('success') }}',
                confirmButtonColor: '#28a745'
            });
        @endif

        @if(session('error'))
            Swal.fire({
                icon: 'error',
                title: 'Peringatan !!',
                text: '{{ session('error') }}',
                confirmButtonColor: '#d33'
            });
        @endif
    </script>
</body>
</html>
