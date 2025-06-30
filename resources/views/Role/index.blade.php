<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->

<head>
  <title>Management Role</title>
  <!-- [Meta] -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Manage your roles easily in this application.">
  <meta name="keywords" content="Role Management, Laravel, Dashboard">
  <meta name="author" content="CodedThemes">

  <!-- [Favicon] icon -->
  <link rel="icon" href="../assets/images/favicon.svg" type="image/x-icon">

  <!-- [Google Font] Family -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap" id="main-font-link">

  <!-- [Tabler Icons] -->
  <link rel="stylesheet" href="../assets/fonts/tabler-icons.min.css">

  <!-- [Feather Icons] -->
  <link rel="stylesheet" href="../assets/fonts/feather.css">

  <!-- [Font Awesome Icons] -->
  <link rel="stylesheet" href="../assets/fonts/fontawesome.css">

  <!-- [Template CSS Files] -->
  <link rel="stylesheet" href="../assets/css/style.css" id="main-style-link">
  <link rel="stylesheet" href="../assets/css/style-preset.css">
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
                <h5 class="m-b-10">Management Role</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- [ breadcrumb ] end -->

      <!-- [ Main Content ] start -->

      <div class="mb-3">
        <a href="{{ route('roles.create') }}" class="btn btn-primary">Create Role</a>
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
            <h3 class="card-header p-3"></h3>
            <div class="card-body">
                <table id="myTable"class="display">
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
                  <!-- Tombol Edit -->
                  <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-warning btn-sm edit-btn">
                    <i class="fas fa-pen"></i> <!-- Ikon Pena -->
                  </a>

                  <!-- Tombol Hapus -->
                  <form action="{{ route('roles.destroy', $role->id) }}" method="POST" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm delete-btn" onclick="return confirm('Apakah Anda yakin ingin menghapus data role ini?')">
                      <i class="fas fa-trash-alt"></i> <!-- Ikon Tempat Sampah -->
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
      <!-- [ Main Content ] end -->
    </div>
  </div>

  <footer class="pc-footer">
    <div class="footer-wrapper container-fluid">
      <div class="row">
        <div class="col-sm my-1"></div>
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
        lengthMenu: " _MENU_ entries per page",
        info: "Showing _START_ to _END_ of _TOTAL_ entries",
        paginate: {
          previous: "Previous",
          next: "Next"
        },
        zeroRecords: "Not data found"
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
<script>

  @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
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
    <script>

        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif


    </script>
<!-- [Body] end -->

</html>
