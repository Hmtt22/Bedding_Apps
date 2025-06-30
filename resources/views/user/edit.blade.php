<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                        <h5 class="m-b-10">Edit Account</h5>
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

            <form action="{{ route('users.update', $user->id) }}" method="POST">
                @csrf
                @method('PUT') <!-- Menandakan bahwa ini adalah metode PUT untuk update -->

                <div class="mb-3">
                    <label for="name" class="form-label">Account Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name) }}" required>
                </div>

                <div class="mb-3">
                    <label for="location" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="{{ old('location', $user->email) }}" required>
                </div>

                <div class="mb-3">
                    <label for="nik" class="form-label">NIK</label>
                    <input type="text" class="form-control" id="nik" name="nik" value="{{ old('nik', $user->nik) }}" required>
                </div>

                <div class="mb-3">
                    <label for="ktp" class="form-label">KTP Number</label>
                    <input type="text" class="form-control" id="ktp" name="ktp" value="{{ old('ktp', $user->ktp) }}" required>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3">{{ old('description', $user->description) }}</textarea>
                </div>

                <div class="form-footer">
                    <!-- Button to go back to the users index -->
                    <a href="{{ route('users.index') }}" class="btn btn-danger">Back</a>
                    <!-- Button to users the building -->
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
