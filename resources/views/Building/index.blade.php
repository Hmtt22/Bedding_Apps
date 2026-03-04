    <!DOCTYPE html>
    <html lang="en">
    <!-- [Head] start -->

    <head>
        <style>
            /* Gaya Tombol Hapus */
    .delete-btn {
        display: inline-flex;
        align-items: center;
        background-color: #e74c3c; /* Warna merah untuk tombol hapus */
        color: white;
        font-size: 20px; /* Ukuran ikon lebih besar */
        padding: 10px 16px; /* Padding agar tombol lebih besar */
        border-radius: 50px; /* Membulatkan tombol */
        box-shadow: 3px 3px 6px rgba(0, 0, 0, 0.1); /* Bayangan lembut */
        text-decoration: none;
        transition: all 0.3s ease;
    }

    /* Gaya saat hover */
    .delete-btn:hover {
        background-color: #c0392b; /* Warna lebih gelap saat hover */
        transform: translateY(-4px); /* Efek terangkat saat hover */
        box-shadow: 6px 6px 12px rgba(0, 0, 0, 0.2); /* Bayangan lebih kuat */
    }

    /* Efek saat fokus */
    .delete-btn:focus {
        outline: none;
        box-shadow: 0 0 10px rgba(255, 87, 34, 0.8); /* Efek glow saat fokus */
    }

    /* Efek pada ikon */
    .delete-btn i {
        margin-right: 8px; /* Memberikan jarak antara ikon dan batas tombol */
        font-size: 22px; /* Ukuran ikon lebih besar agar lebih jelas */
    }

    /* Gaya Umum Tombol */
    .edit-btn {
    display: inline-flex;
    align-items: center;
    background-color: #f39c12; /* Warna kuning terang */
    color: white;
    font-size: 18px;
    padding: 12px 24px; /* Ukuran padding lebih besar untuk kenyamanan */
    border-radius: 25px; /* Membulatkan tombol */
    box-shadow: 3px 3px 6px rgba(0, 0, 0, 0.2); /* Bayangan 3D */
    text-decoration: none; /* Menghilangkan garis bawah */
    transition: all 0.3s ease; /* Transisi saat hover */
    }

    /* Gaya saat hover */
    .edit-btn:hover {
    background-color: #e67e22; /* Warna lebih gelap saat hover */
    transform: translateY(-4px); /* Efek tombol terangkat */
    box-shadow: 6px 6px 10px rgba(0, 0, 0, 0.3); /* Bayangan lebih kuat */
    }

    /* Efek pada ikon */
    .edit-btn i {
    margin-right: 8px; /* Memberikan jarak antara ikon */
    font-size: 20px; /* Ukuran ikon */
    }

    /* Gaya saat fokus */
    .edit-btn:focus {
    outline: none;
    box-shadow: 0 0 10px rgba(255, 165, 0, 0.8); /* Efek glow saat fokus */
    }

        </style>
    <title>Bedding Apps</title>
    <!-- [Meta] -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Mantis is made using Bootstrap 5 design framework. Download the free admin template & use it for your project.">
    <meta name="keywords" content="Mantis, Dashboard UI Kit, Bootstrap 5, Admin Template, Admin Dashboard, CRM, CMS, Bootstrap Admin Template">
    <meta name="author" content="CodedThemes">

    <!-- [Favicon] icon -->
    <link rel="icon" href="../assets/images/favicon.svg" type="image/x-icon"> <!-- [Google Font] Family -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap" id="main-font-link">
    <!-- [Tabler Icons] https://tablericons.com -->
    <link rel="stylesheet" href="../assets/fonts/tabler-icons.min.css" >
    <!-- [Feather Icons] https://feathericons.com -->
    <link rel="stylesheet" href="../assets/fonts/feather.css" >
    <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
    <link rel="stylesheet" href="../assets/fonts/fontawesome.css" >
    <!-- [Material Icons] https://fonts.google.com/icons -->
    <link rel="stylesheet" href="../assets/fonts/material.css" >
    <!-- [Template CSS Files] -->
    <link rel="stylesheet" href="../assets/css/style.css" id="main-style-link" >
    <link rel="stylesheet" href="../assets/css/style-preset.css" >
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.2/css/dataTables.dataTables.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>$('#myTable').DataTable();</script>

    </head>
    <!-- [Head] end -->
    <!-- [Body] Start -->

    <body data-pc-preset="preset-1" data-pc-direction="ltr" data-pc-theme="light">
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
    <div class="loader-track">
        <div class="loader-fill"></div>
    </div>
    </div>
    <!-- [ Pre-loader ] End -->

    <!-- [ Sidebar Menu ] start -->
    @include('partials.sidebar')
    <!-- [ Sidebar Menu ] end -->

    <!-- [ Header Topbar ] start -->
    @include('partials.navbar')
    <!-- [ Header ] end -->



    <!-- [ Main Content ] start -->
    <div class="pc-container">
        <div class="pc-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                <div class="page-header-title">
                    <ul class="breadcrumb" style="font-size: 22px; font-weight: 570; ">
                        <li class="breadcrumb-item"><a href="{{ route('layouts.index') }}">Dashboard</a></li>
                        <li class="breadcrumb-item" aria-current="page">Building</li>
                    </ul>
                </div>
                {{-- <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="../dashboard/index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0)">Dashboard</a></li>
                    <li class="breadcr  umb-item" aria-current="page">Home</li>
                </ul> --}}
                </div>
            </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->

    <!-- [ Main Content ] start -->

    <!-- [ Create Building Button ] start -->
    <div class="mb-3">

    <!-- [ Create Building Button ] end -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
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
            {{-- <a href="{{ route('buildings.create') }}" class="btn btn-sm btn-primary">
                <i class="fas fa-plus"></i> Create Building
            </a> --}}
            <button type="button" class="btn btn-primary mb-3"
                data-bs-toggle="modal" data-bs-target="#createBuildingModal">
                + Create New Building
            </button>
        </div>
        <div class="card-body">
            <table id="myTable" class="display">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Building Name</th>
                        <th>Address</th>
                        <th>Description</th>
                        <th>Floors</th>
                        <th>Created</th>
                        <th>Update</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($buildings as $building)
                        <tr>
                            <td>{{ $building->formatted_id }}</td>
                            <td>{{ $building->name }}</td>
                            <td>{{ $building->address }}</td>
                            <td>{{ $building->description }}</td>
                            <td>{{ $building->jumlah_lantai }}</td>
                            <td>{{ $building->created_at->setTimezone('Asia/Jakarta')->translatedFormat('l, d F Y, H:i') }}</td>
                            <td>{{ $building->updated_at->setTimezone('Asia/Jakarta')->translatedFormat('l, d F Y, H:i') }}</td>
                            <td>
                                <!-- Tombol view -->
                                {{-- <a href="{{ route('buildings.show', $building->id) }}"
                                    style="background-color:#4e73df;
                                    color:white;
                                    padding:6px 14px;
                                    border-radius:20px;
                                    text-decoration:none;
                                    font-size:14px;
                                    display:inline-block;
                                    margin-right:5px;">
                                    Detail</a> --}}

                                <!-- Tombol Edit -->
                                <a href="{{ route('buildings.edit', $building->id) }}" class="edit-btn"
                                    style="background-color:#1cc88a;
                                    color:white;
                                    padding:6px 14px;
                                    border-radius:20px;
                                    text-decoration:none;
                                    font-size:14px;
                                    display:inline-block;
                                    margin-right:5px;">
                                    Edit </a>

                                <!-- Tombol Hapus -->
                                <form action="{{ route('buildings.destroy', $building->id) }}"
                                    method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="delete-btn" onclick="return confirm('Apakah Anda yakin ingin menghapus bed ini?')"
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

            <!-- === MODAL CREATE BUILDING === -->
            <div class="modal fade" id="createBuildingModal" tabindex="-1"
                 aria-labelledby="createBuildingModalLabel" aria-hidden="true">

                <div class="modal-dialog modal-lg">
                    <div class="modal-content">

                        <div class="modal-header">
                            <h5 class="modal-title" id="createBuildingModalLabel">Create New Building</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <form action="{{ route('buildings.store') }}" method="POST">
                            @csrf

                            <div class="modal-body">

                                <div class="mb-3">
                                    <label class="form-label fw-bold">Building Name</label>
                                    <input type="text" name="name" class="form-control"
                                           placeholder="Enter building name" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-bold">Address</label>
                                    <input type="text" name="address" class="form-control"
                                           placeholder="Enter building address" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-bold">Description</label>
                                    <textarea name="description" class="form-control" rows="4"
                                              placeholder="Describe the building" required></textarea>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-bold">Floors</label>
                                    <input type="number" name="jumlah_lantai" class="form-control"
                                           placeholder="Number of floors" required>
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
            <div class="col-sm my-1">

            </div>
        </div>
        </div>
    </footer>

    <!-- [Page Specific JS] start -->
    <script src="../assets/js/plugins/apexcharts.min.js"></script>
    <script src="../assets/js/pages/dashboard-default.js"></script>
    <!-- [Page Specific JS] end -->
    <!-- Required Js -->
    <script src="../assets/js/plugins/popper.min.js"></script>
    <script src="../assets/js/plugins/simplebar.min.js"></script>
    <script src="../assets/js/plugins/bootstrap.min.js"></script>
    <script src="../assets/js/fonts/custom-font.js"></script>
    <script src="../assets/js/pcoded.js"></script>
    <script src="../assets/js/plugins/feather.min.js"></script>
    <script src="https://cdn.datatables.net/2.3.2/js/dataTables.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#myTable').DataTable({
        language: {
            search: "🔍 Search:",
            lengthMenu: " _MENU_ entries per page         ",
            info: "Showing _START_ to _END_ of _TOTAL_ entries",
            paginate: {
            previous: "Previous",
            next: "Next"
            },
            zeroRecords: "No data found"
        }
        });
    });
    </script>



    <script>layout_change('light');</script>




    <script>change_box_container('false');</script>



    <script>layout_rtl_change('false');</script>


    <script>preset_change("preset-1");</script>


    <script>font_change("Public-Sans");</script>



    </body>
    {{--
    <script type="text/javascript">
        $(function () {

        var table = $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('users.index') }}",
            columns: [
                {data: 'id', name: 'id'},
                {data: 'name', name: 'name'},
                {data: 'description', name: 'description'},
                {data: 'capacity', name: 'capacity'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });

        });
    </script> --}}
    <script>

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

    <!-- [Body] end -->

    </html>
