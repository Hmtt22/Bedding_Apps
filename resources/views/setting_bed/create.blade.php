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
  <title>Aplikasi RS</title>
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
                <h5 class="m-b-10">Create New Data</h5>
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

  <!-- [ Create Building Button ] end -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif


    <div class="card-body">
        <div class="card-body">
            <form action="{{ route('setting_beds.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="building_id">Building Name</label>
                    <select name="building_id" id="building_id" class="form-control" required>
                        <option value="">Choose a Building</option>
                        @foreach($buildings as $building)
                            <option value="{{ $building->id }}">{{ $building->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="room_id">Room Name</label>
                    <select name="room_id" id="room_id" class="form-control" required>
                        <option value="">Choose a Room</option>
                        @foreach($rooms as $room)
                            <option value="{{ $room->id }}">{{ $room->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="bed_id">Bed Name</label>
                    <select name="bed_id" id="bed_id" class="form-control" required>
                        <option value="">Choose a Bed</option>
                        @foreach($beds as $bed)
                            <option value="{{ $bed->id }}">{{ $bed->name }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Buttons aligned to the right -->
                <div class="btn-container">
                    <a href="{{ route('setting_beds.index') }}" class="btn btn-danger">Back</a>
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>

            </form>


    </div>

  <!-- [ Main Content ] end -->

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





  <script>layout_change('light');</script>




  <script>change_box_container('false');</script>



  <script>layout_rtl_change('false');</script>


  <script>preset_change("preset-1");</script>


  <script>font_change("Public-Sans");</script>



</body>
<!-- [Body] end -->

</html>
