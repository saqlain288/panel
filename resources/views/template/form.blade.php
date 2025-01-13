<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Azia Sign In</title>

  <!-- CSS Files -->
  <link href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/azia.css') }}" rel="stylesheet">
</head>
<body class="az-body">

  <div class="az-signin-wrapper">
    <div class="az-card-signin">
      <h1 class="az-logo">az<span>i</span>a</h1>
      <div class="az-signin-header">
        <h2>Welcome back!</h2>
        <h4>Please sign in to continue</h4>

        <!-- Updated Form -->
        <form action="{{ url('/tenpage') }}" method="POST">
          @csrf <!-- CSRF Token for Security -->
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="Name" class="form-control" placeholder="Enter your name" required>
          </div><!-- form-group -->
          <div class="form-group">
            <label for="age">Age</label>
            <input type="number" id="age" name="age" class="form-control" placeholder="Enter your age" required>
          </div><!-- form-group -->
          <button type="submit" class="btn btn-primary btn-block">Sign In</button>
        </form>
      </div><!-- az-signin-header -->
      <div class="az-signin-footer">
        <p><a href="{{ url('/ninepage') }}">Forgot password?</a></p>
        <p>Don't have an account? <a href="{{ url('/firstpage') }}">Create an Account</a></p>
      </div><!-- az-signin-footer -->
    </div><!-- az-card-signin -->
  </div><!-- az-signin-wrapper -->

  <!-- JS Files -->
  <script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('js/azia.js') }}"></script>
</body>
</html>
