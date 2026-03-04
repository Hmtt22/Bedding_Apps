<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bedding Apps</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Mantis is made using Bootstrap 5 design framework.">
  <meta name="keywords" content="Mantis, Dashboard UI Kit, Bootstrap 5, Admin Template, Admin Dashboard">
  <meta name="author" content="CodedThemes">

  <link rel="icon" href="../assets/images/favicon.svg" type="image/x-icon">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap" id="main-font-link">
  <link rel="stylesheet" href="../assets/fonts/tabler-icons.min.css">
  <link rel="stylesheet" href="../assets/fonts/feather.css">
  <link rel="stylesheet" href="../assets/fonts/fontawesome.css">
  <link rel="stylesheet" href="../assets/fonts/material.css">
  <link rel="stylesheet" href="../assets/css/style.css" id="main-style-link">
  <link rel="stylesheet" href="../assets/css/style-preset.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/2.3.2/css/dataTables.dataTables.css" />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <style>
    /* Tombol Edit */
    .edit-btn {
      display: inline-flex;
      align-items: center;
      background-color: #f39c12; /* Warna kuning terang */
      color: white;
      font-size: 18px;
      padding: 12px 24px; /* Padding lebih besar */
      border-radius: 25px;
      box-shadow: 3px 3px 6px rgba(0,0,0,0.2);
      text-decoration: none;
      transition: all 0.3s ease;
    }

    .edit-btn i {
      margin-right: 8px;
      font-size: 20px;
    }

    .edit-btn:hover {
      background-color: #e67e22; /* Warna lebih gelap */
      transform: translateY(-4px);
      box-shadow: 6px 6px 10px rgba(0,0,0,0.3);
    }

    .edit-btn:focus {
      outline: none;
      box-shadow: 0 0 10px rgba(255,165,0,0.8);
    }

    /* Tombol Delete */
    .delete-btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      background-color: #e74c3c;
      color: white;
      font-size: 18px;
      padding: 12px 20px;
      border-radius: 50px;
      border: 1px solid #00000033;
      cursor: pointer;
      transition: all 0.3s ease;
    }
    .delete-btn i {
      margin: 0;
      font-size: 20px;
    }
    .delete-btn:hover {
      background-color: #c0392b;
      transform: translateY(-2px);
    }
  </style>
</head>
<body data-pc-preset="preset-1" data-pc-direction="ltr" data-pc-theme="light">

<div class="loader-bg">
  <div class="loader-track">
    <div class="loader-fill"></div>
  </div>
</div>

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
                        <li class="breadcrumb-item" aria-current="page">Account</li>
                    </ul>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>

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
          {{-- <a href="{{ route('users.create') }}" class="btn btn-sm btn-primary">
            <i class="fas fa-plus"></i> Create Account
          </a> --}}
          <button type="button" class="btn btn-primary mb-3"
                data-bs-toggle="modal" data-bs-target="#createBuildingModal">
                + Create New Account
            </button>
        </div>
        <div class="card-body">
          <table id="myTable" class="display">
            <thead>
              <tr>
                <th>ID</th>
                <th>Account Name</th>
                <th>Email</th>
                <th>NIK</th>
                <th>KTP Number</th>
                <th>Description</th>
                <th>Created</th>
                <th>Update</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($users as $user)
                <tr>
                  <td>{{ ($users->currentPage() - 1) * $users->perPage() + $loop->iteration }}</td>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->nik }}</td>
                  <td>{{ $user->ktp }}</td>
                  <td>{{ $user->description }}</td>
                  <td>{{ $user->created_at->setTimezone('Asia/Jakarta')->translatedFormat('l, d F Y, H:i') }}</td>
                  <td>{{ $user->updated_at->setTimezone('Asia/Jakarta')->translatedFormat('l, d F Y, H:i') }}</td>
                  <td>
                    <a href="{{ route('users.edit', $user->id) }}" class="edit-btn"
                        style="background-color:#1cc88a;
                        color:white;
                        padding:6px 14px;
                        border-radius:20px;
                        text-decoration:none;
                        font-size:14px;
                        display:inline-block;
                        margin-right:5px;">
                        Edit</a>

                    <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: inline-block;">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="delete-btn" onclick="return confirm('Apakah Anda yakin ingin menghapus data user ini?')"
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

          <div class="d-flex justify-content-end mt-3">
            {{ $users->links() }}
          </div>
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
                            <h5 class="modal-title" id="createBuildingModalLabel">Create New Account</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <form action="{{ route('users.store') }}" method="POST">
    @csrf

    <div class="modal-body">

        <div class="mb-3">
            <label class="form-label fw-bold">Account Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label fw-bold">Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label fw-bold">Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label fw-bold">NIK</label>
            <input type="number" name="nik" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label fw-bold">KTP Number</label>
            <input type="number" name="ktp" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label fw-bold">Description</label>
            <textarea name="description" class="form-control" rows="4"></textarea>
        </div>

    </div>

    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
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

<script src="../assets/js/plugins/apexcharts.min.js"></script>
<script src="../assets/js/pages/dashboard-default.js"></script>
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
      paging: false,
      language: {
        search: "🔍 Search:",
        zeroRecords: "No data found"
      }
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
  });
</script>


<script>layout_change('light');</script>
<script>
