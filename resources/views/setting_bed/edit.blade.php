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

            <form action="{{ route('setting_beds.update', $settingBed->id) }}" method="POST">
                @csrf
                @method('PUT') <!-- Menandakan bahwa ini adalah metode PUT untuk update -->

                <div class="form-group">
                    <label for="building_id">Pilih Building</label>
                    <select name="building_id" id="building_id" class="form-control" required>
                        <option value="">--Pilih Building--</option>
                        @foreach($buildings as $building)
                            <option value="{{ $building->id }}" {{ $settingBed->building_id == $building->id ? 'selected' : '' }}>
                                {{ $building->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="room_id">Pilih Room</label>
                    <select name="room_id" id="room_id" class="form-control" required>
                        <option value="">--Pilih Room--</option>
                        @foreach($rooms as $room)
                            <option value="{{ $room->id }}" {{ $settingBed->room_id == $room->id ? 'selected' : '' }}>
                                {{ $room->name }}
                            </option>
                        @endforeach
                    </select>
                </div><div class="form-group">
                <label for="bed_id">Pilih Bed</label>
                <select name="bed_id" id="bed_id" class="form-control" required>
                    <option value="">--Pilih Bed--</option>
                    @foreach($beds as $bed)
                        <option value="{{ $bed->id }}" {{ $settingBed->bed_id == $bed->id ? 'selected' : '' }}>
                            {{ $bed->name }}
                        </option>
                    @endforeach
                </select>
            </div>


                <div class="form-footer">
                    <!-- Button to go back to the building index -->
                    <a href="{{ route('setting_beds.index') }}" class="btn btn-danger">Kembali</a>
                    <!-- Button to update the building -->
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
