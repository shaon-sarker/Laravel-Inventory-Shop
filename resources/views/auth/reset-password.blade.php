{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                    type="password"
                                    name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Reset Password') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Reset Password | Admin </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.ico') }}">
    <!-- Bootstrap Css -->
    <link href="{{ asset('backend/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('backend/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
  </head>
  <body class="auth-body-bg">
    <div class="bg-overlay"></div>
    <div class="wrapper-page">
      <div class="container-fluid p-0">
        <div class="card">
          <div class="card-body">
            <div class="text-center mt-4">
              <div class="mb-3">
                <a href="index.html" class="auth-logo">
                  <img src="{{ asset('backend/assets/images/logo-dark.png') }}" height="30" class="logo-dark mx-auto" alt="">
                  <img src="{{ asset('backend/assets/images/logo-light.png') }}" height="30" class="logo-light mx-auto" alt="">
                </a>
              </div>
            </div>
            <h4 class="text-muted text-center font-size-18">
              <b>Reset Password</b>
            </h4>
            <div class="p-3">
              <form class="form-horizontal mt-3" method="POST" action="{{ route('password.update') }}"> 
                @csrf 
                <!-- Password Reset Token -->
                <input type="hidden" name="token" value="{{ $request->route('token') }}">
                
              
                <div class="form-group mb-3">
                  <div class="col-xs-12">
                    <input class="form-control" id="email" type="email" name="email" required placeholder="Email">
                  </div>
                </div>
                <div class="form-group mb-3">
                    <div class="col-xs-12">
                      <input class="form-control" id="password" type="password" name="password" required placeholder="Password">
                    </div>
                </div>
                <div class="form-group mb-3">
                    <div class="col-xs-12">
                      <input class="form-control" id="password_confirmation" type="password" name="password_confirmation" required placeholder="Confirm Password">
                    </div>
                </div>
                <div class="form-group pb-2 text-center row mt-3">
                  <div class="col-12">
                    <button class="btn btn-info w-100 waves-effect waves-light" type="submit">Reset Password</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <!-- end cardbody -->
        </div>
        <!-- end card -->
      </div>
      <!-- end container -->
    </div>
    <!-- end -->
    <!-- JAVASCRIPT -->
    <script src="{{ asset('backend/assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/app.js') }}"></script>
  </body>
</html>