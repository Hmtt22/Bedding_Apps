<!DOCTYPE html>
<html lang="en">
<head>
  <title>Create Role</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Create a new role">
  <meta name="keywords" content="Role, Management">
  <meta name="author" content="CodedThemes">

  <link rel="icon" href="../assets/images/favicon.svg" type="image/x-icon">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap" id="main-font-link">
  <link rel="stylesheet" href="../assets/fonts/tabler-icons.min.css">
  <link rel="stylesheet" href="../assets/fonts/feather.css">
  <link rel="stylesheet" href="../assets/fonts/fontawesome.css">
  <link rel="stylesheet" href="../assets/css/style.css" id="main-style-link">
  <link rel="stylesheet" href="../assets/css/style-preset.css">
</head>
<body data-pc-preset="preset-1" data-pc-direction="ltr" data-pc-theme="light">

  <!-- [ Sidebar Menu & Header ] -->
  @include('partials.sidebar')
  @include('partials.navbar')

  <!-- [ Main Content ] start -->
  <div class="pc-container">
    <div class="pc-content">
      <!-- Breadcrumb -->
      <div class="page-header">
        <div class="page-block">
          <div class="row align-items-center">
            <div class="col-md-12">
              <div class="page-header-title">
                <h5 class="m-b-10">Create New Role</h5>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Form Role -->
      <div class="card-body">
        <form action="{{ route('roles.store') }}" method="POST">
          @csrf
          <div class="mb-3">
            <label for="role" class="form-label">Role Name</label>
            <input type="text" class="form-control" id="role" name="role"  required>
          </div>

          <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" ></textarea>
          </div>

          <div class="btn-container">
            <a href="{{ route('roles.index') }}" class="btn btn-danger">Back</a>
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="pc-footer">
    <div class="footer-wrapper container-fluid">
      <div class="row">
        <div class="col-sm my-1"></div>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <script src="../assets/js/plugins/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/feather.min.js"></script>
  <script src="../assets/js/pcoded.js"></script>
  <script>layout_change('light');</script>
  <script>change_box_container('false');</script>
  <script>layout_rtl_change('false');</script>
  <script>preset_change("preset-1");</script>
  <script>font_change("Public-Sans");</script>
</body>
</html>
