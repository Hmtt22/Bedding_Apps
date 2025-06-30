<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Mantis is made using Bootstrap 5 design framework. Download the free admin template & use it for your project.">
  <meta name="keywords" content="Mantis, Dashboard UI Kit, Bootstrap 5, Admin Template, Admin Dashboard, CRM, CMS, Bootstrap Admin Template">
  <meta name="author" content="CodedThemes">
    <title>Edit Building</title>

    <!-- Link to Bootstrap CSS (local asset) -->
    <link rel="icon" href="{{ asset('assets/images/favicon.svg') }}" type="image/x-icon">

    <!-- [Google Font] Family -->
    <link rel="stylesheet" href="{{ asset('https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap') }}" id="main-font-link">

    <!-- [Tabler Icons] -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/tabler-icons.min.css') }}">

    <!-- [Feather Icons] -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/feather.css') }}">

    <!-- [Font Awesome Icons] -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome.css') }}">

    <!-- [Material Icons] -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/material.css') }}">

    <!-- [Template CSS Files] -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" id="main-style-link">
    <link rel="stylesheet" href="{{ asset('assets/css/style-preset.css') }}">

    <style>
        /* Gaya umum untuk konten */
        .main-content {
            margin-left: 250px; /* Make space for sidebar */
            padding: 20px;
        }
    </style>
</head>
<body>

    <!-- Include Sidebar -->
    @include('partials.sidebar')

    <!-- Include Navbar -->
    @include('partials.navbar')

    <div class="main-content">
        <div class="container mt-4">
            <div class="page-header">
                <div class="page-block">
                  <div class="row align-items-center">
                    <div class="col-md-12">
                      <div class="page-header-title">
                        <h5 class="m-b-10">Edit Building</h5>
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

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('buildings.update', $building->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row mb-3">
                    <label for="name" class="col-md-3 col-form-label">Building Name</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $building->name) }}" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="address" class="col-md-3 col-form-label">Address</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="address" name="address" value="{{ old('address', $building->address) }}" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="description" class="col-md-3 col-form-label">Description</label>
                    <div class="col-md-9">
                        <textarea class="form-control" id="description" name="description" rows="4" required>{{ old('description', $building->description) }}</textarea>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="jumlah_lantai" class="col-md-3 col-form-label">Floors</label>
                    <div class="col-md-9">
                        <input type="number" class="form-control" id="jumlah_lantai" name="jumlah_lantai" value="{{ old('jumlah_lantai', $building->jumlah_lantai) }}" required>
                    </div>
                </div>

                <div class="d-flex justify-content-between mt-4">
                    <a href="{{ route('buildings.index') }}" class="btn btn-danger">Back</a>
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Include Bootstrap JS (local assets) -->
    <script src="{{ asset('assets/js/plugins/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/dashboard-default.js') }}"></script>

    <!-- Required Js -->
    <script src="{{ asset('assets/js/plugins/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/fonts/custom-font.js') }}"></script>
    <script src="{{ asset('assets/js/pcoded.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/feather.min.js') }}"></script>

    <script>
        layout_change('light');
    </script>

    <script>
        change_box_container('false');
    </script>

    <script>
        layout_rtl_change('false');
    </script>

    <script>
        preset_change("preset-1");
    </script>

    <script>
        font_change("Public-Sans");
    </script>

</body>
</html>
