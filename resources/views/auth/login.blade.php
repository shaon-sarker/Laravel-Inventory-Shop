<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Inventory MS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.png') }}">
    <!-- Select 2 -->
    <!---custom css----->
    <link rel="stylesheet" href="{{ asset('backend/assets/customcss/style.css') }}">
    <!---Toastr css----->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
  </head>

  <body>
    <div class="container">
      <div class="form-container" id="login-form">
        <h1>Login</h1>
        <form method="POST" action="{{ route('login') }}">
          @csrf 
          <label for="username">Email</label>
          <input type="email" name="email" required>
          <label for="password">Password</label>
          <input type="password" name="password" required>
          <button type="submit">Login</button>
        </form>
        <p>Forget your password? <a href="{{ route('password.request') }}" id="signup-link">Click here</a></p>
      </div>
    </div>
    <!-- end -->
    <!-- JAVASCRIPT -->
    <script src="{{ asset('backend/assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/app.js') }}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
      @if(Session::has('message'))
      var type = "{{ Session::get('alert-type','info') }}"
      switch (type) {
        case 'info':
          toastr.info(" {{ Session::get('message') }} ");
          break;
        case 'success':
          toastr.success(" {{ Session::get('message') }} ");
          break;
        case 'warning':
          toastr.warning(" {{ Session::get('message') }} ");
          break;
        case 'error':
          toastr.error(" {{ Session::get('message') }} ");
          break;
      }
      @endif
    </script>
  </body>
</html>






