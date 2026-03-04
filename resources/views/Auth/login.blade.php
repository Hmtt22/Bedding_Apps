<!DOCTYPE html>
<html lang="en">
<head>
  <title>Log In</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap">

  <!-- Icon Fonts -->
  <link rel="stylesheet" href="{{ asset('assets/fonts/tabler-icons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/fonts/feather.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/fonts/material.css') }}">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/style-preset.css') }}">

  <!-- Background Image CSS -->
  <style>
  body {
    background: url("{{ asset('assets/images/bg-login.jpg') }}") no-repeat center center fixed;
    background-size: cover;
    filter: none !important;

  }

  .card {
    background: rgba(255, 255, 255, 0.97);
  }

  .auth-wrapper {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
  }
</style>

</head>

<body>

  <form action="/login" method="POST">
    @csrf

    <div class="auth-main">
      <div class="auth-wrapper v3">
        <div class="auth-form">

          <div class="auth-header text-center mb-4">
            <a href="#">
            </a>
          </div>

          <div class="card my-5">
            <div class="card-body">

              <div class="d-flex justify-content-between align-items-end mb-4">
                <h3 class="mb-0"><b>Login</b></h3>
                <a href="#" class="link-primary">Don't have an account?</a>
              </div>

              <div class="form-group mb-3">
                <label class="form-label">Email Address</label>
                <input type="email" name="email" class="form-control" placeholder="Email Address" required>
              </div>

              <div class="form-group mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password" required>
              </div>

              <div class="d-flex mt-1 justify-content-between">
                <div class="form-check">
                  <input class="form-check-input input-primary" type="checkbox" id="customCheck1" checked>
                  <label class="form-check-label" for="customCheck1">Keep me sign in</label>
                </div>
                <a href="#" class="text-secondary">Forgot Password?</a>
              </div>

              <div class="d-grid mt-4">
                <button type="submit" class="btn btn-primary">Login</button>
              </div>

            </div>
          </div>

            <div class="col-auto my-1">
              <ul class="list-inline footer-link mb-0">
                <li class="list-inline-item"><a href="#">Home</a></li>
                <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                <li class="list-inline-item"><a href="#">Contact us</a></li>
              </ul>
            </div>
          </div>

        </div>
      </div>
    </div>

  </form>

  <!-- JS -->
  <script src="{{ asset('assets/js/plugins/popper.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/simplebar.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/js/fonts/custom-font.js') }}"></script>
  <script src="{{ asset('assets/js/pcoded.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/feather.min.js') }}"></script>

</body>
</html>
