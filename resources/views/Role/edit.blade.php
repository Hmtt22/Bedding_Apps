<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Role</title>

  <link rel="icon" href="{{ asset('assets/images/favicon.svg') }}" type="image/x-icon">

  <!-- Fonts & Icons -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap" id="main-font-link">
  <link rel="stylesheet" href="{{ asset('assets/fonts/tabler-icons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/fonts/feather.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/fonts/material.css') }}">

  <!-- Main Styles -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" id="main-style-link">
  <link rel="stylesheet" href="{{ asset('assets/css/style-preset.css') }}">

  <style>
    .main-content {
      margin-left: 250px;
      padding: 20px;
    }
  </style>
</head>
<body data-pc-preset="preset-1" data-pc-direction="ltr" data-pc-theme="light">

  <!-- Sidebar & Navbar -->
  @include('partials.sidebar')
  @include('partials.navbar')

  <!-- Main Content -->
  <div class="main-content">
    <div class="container mt-4">
      <div class="page-header">
        <div class="page-block">
          <div class="row align-items-center">
            <div class="col-md-12">
              <div class="page-header-title">
                <h5 class="m-b-10">Edit Role</h5>
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

      <form action="{{ route('roles.update', $role->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
          <label for="role" class="form-label">Role Name</label>
          <input type="text" class="form-control" id="role" name="role" value="{{ old('role', $role->role) }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="description" name="description" rows="3" placeholder="Masukkan deskripsi...">{{ old('description', $role->description) }}</textarea>
          </div>

        <div class="form-footer">
          <a href="{{ route('roles.index') }}" class="btn btn-danger">Kembali</a>
          <button type="submit" class="btn btn-success">Update Role</button>
        </div>
      </form>
    </div>
  </div>

  <!-- Scripts -->
  <script src="{{ asset('assets/js/plugins/apexcharts.min.js') }}"></script>
  <script src="{{ asset('assets/js/pages/dashboard-default.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/popper.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/simplebar.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/js/fonts/custom-font.js') }}"></script>
  <script src="{{ asset('assets/js/pcoded.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/feather.min.js') }}"></script>

  <script>layout_change('light');</script>
  <script>change_box_container('false');</script>
  <script>layout_rtl_change('false');</script>
  <script>preset_change("preset-1");</script>
  <script>font_change("Public-Sans");</script>

</body>
</html>
