<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->

<head>
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
                <h5 class="m-b-10">Create Account</h5>
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

  <div class="card-body">
    <form action="{{ route('users.store') }}" method="POST" >
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Account Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="mb-3">
            <label for="location" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email" required>
        </div>

        <div class="mb-3">
            <label for="location" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>

        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
        </div>

        <div class="mb-3">
            <label for="nik" class="form-label">NIK</label>
            <input type="text" class="form-control" id="nik" name="nik" required>
        </div>

        <div class="mb-3">
            <label for="ktp" class="form-label">KTP Number</label>
            <input type="text" class="form-control" id="ktp" name="ktp" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" ></textarea>
        </div>


        <div class="btn-container">
            <a href="{{ route('users.index') }}" class="btn btn-danger">Back</a>
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
