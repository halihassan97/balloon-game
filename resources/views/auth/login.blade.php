<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Thorn and Balloons</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc."/>
    <meta name="author" content="Thorn and Balloons"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('users/images/thron-and-balloons-icon.webp') }}">

    <!-- App css -->
    <link href="{{asset('admin/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons -->
    <link href="{{asset('admin/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />

    <script src="{{asset('admin/assets/js/head.js')}}"></script>
</head>

<body>
    <!-- Start Begin page -->
    <div class="account-page">
        <div class="container-fluid p-0">
            <div class="row align-items-center justify-content-center g-0 px-3 py-3 vh-100">

                <div class="col-xxl-6">
                    <div class="row">
                        <div class="col-xl-6 col-md-6 mx-auto">
                            <div>
                                <div class="mb-3 p-0 text-center">
                                    <div class="auth-brand">
                                        <a href="index.html" class="logo logo-light">
                                                <span class="logo-lg">
                                                    <img src="assets/images/logo-light.png" alt="" height="24">
                                                </span>
                                        </a>
                                        <a href="index.html" class="logo logo-dark">
                                                <span class="logo-lg">
                                                    <img src="assets/images/logo-dark.png" alt="" height="24">
                                                </span>
                                        </a>
                                    </div>
                                </div>

                                <div class="auth-title-section mb-3 text-center">
                                    <h3 class="fw-medium mb-1" style="color: #0a0a0a;">Welcome Back</h3>
                                    <p class="fs-14 mb-0" style="color: #0a0a0a;">Please sign in to continue</p>
                                </div>
                            </div>

                            <div class="card mb-0">
                                <div class="card-body">
                                    <div class="mb-0 p-0 p-lg-3">
                                        <div class="mb-0 border-0 p-md-3 p-lg-0">

                                            <div class="pt-0">
                                                <form method="POST" action="{{ route('login') }}" class="mt-0 mb-4">
                                                    @csrf

                                                    <div class="form-group mb-3">
                                                        <label for="email" class="form-label">Username</label>
                                                        <input class="form-control" type="email" id="email" name="email" value="{{ old('email') }}" required autofocus placeholder="Enter Username">
                                                        @error('email')
                                                        <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div>

                                                    <div class="form-group mb-3">
                                                        <label for="password" class="form-label">Password</label>
                                                        <input class="form-control" type="password" id="password" name="password" required placeholder="Enter Password">
                                                        @error('password')
                                                        <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div>

                                                    <div class="form-group d-flex mb-3">
                                                        <div class="col-sm-6">
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="checkbox-signin" name="remember">
                                                                <label class="form-check-label" for="checkbox-signin">Remember me</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 text-end">
                                                            @if (Route::has('password.request'))
                                                                <a class='text-muted fs-14' href='{{ route('password.request') }}'>Forgot password?</a>
                                                            @endif
                                                        </div>
                                                    </div>

                                                    <div class="form-group mb-0">
                                                        <div class="d-grid">
                                                            <button class="btn btn-primary fw-semibold" type="submit">Log In</button>
                                                        </div>
                                                    </div>
                                                </form>

                                                <div class="text-center text-muted">
                                                    <p class="mb-0">Don't have an account ?<a class='text-primary ms-2 fw-medium' href='auth-register.html'>Create account</a></p>
                                                </div>

                                            </div>

{{--                                            <div class="saprator my-4"><span>or continue with email</span></div>--}}

{{--                                            <div class="row">--}}
{{--                                                <div class="col-6">--}}
{{--                                                    <a class="btn text-dark border fw-normal d-flex align-items-center justify-content-center">--}}
{{--                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 48 48" class="me-2">--}}
{{--                                                            <path fill="#ffc107" d="M43.611 20.083H42V20H24v8h11.303c-1.649 4.657-6.08 8-11.303 8c-6.627 0-12-5.373-12-12s5.373-12 12-12c3.059 0 5.842 1.154 7.961 3.039l5.657-5.657C34.046 6.053 29.268 4 24 4C12.955 4 4 12.955 4 24s8.955 20 20 20s20-8.955 20-20c0-1.341-.138-2.65-.389-3.917"/><path fill="#ff3d00" d="m6.306 14.691l6.571 4.819C14.655 15.108 18.961 12 24 12c3.059 0 5.842 1.154 7.961 3.039l5.657-5.657C34.046 6.053 29.268 4 24 4C16.318 4 9.656 8.337 6.306 14.691"/><path fill="#4caf50" d="M24 44c5.166 0 9.86-1.977 13.409-5.192l-6.19-5.238A11.91 11.91 0 0 1 24 36c-5.202 0-9.619-3.317-11.283-7.946l-6.522 5.025C9.505 39.556 16.227 44 24 44"/>--}}
{{--                                                            <path fill="#1976d2" d="M43.611 20.083H42V20H24v8h11.303a12.04 12.04 0 0 1-4.087 5.571l.003-.002l6.19 5.238C36.971 39.205 44 34 44 24c0-1.341-.138-2.65-.389-3.917"/>--}}
{{--                                                        </svg>--}}
{{--                                                        <span>Google</span>--}}
{{--                                                    </a>--}}
{{--                                                </div>--}}

{{--                                                <div class="col-6">--}}
{{--                                                    <a class="btn text-dark border fw-normal d-flex align-items-center justify-content-center">--}}
{{--                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 256 250" class="me-2">--}}
{{--                                                            <path fill="#161614" d="M128.001 0C57.317 0 0 57.307 0 128.001c0 56.554 36.676 104.535 87.535 121.46c6.397 1.185 8.746-2.777 8.746-6.158c0-3.052-.12-13.135-.174-23.83c-35.61 7.742-43.124-15.103-43.124-15.103c-5.823-14.795-14.213-18.73-14.213-18.73c-11.613-7.944.876-7.78.876-7.78c12.853.902 19.621 13.19 19.621 13.19c11.417 19.568 29.945 13.911 37.249 10.64c1.149-8.272 4.466-13.92 8.127-17.116c-28.431-3.236-58.318-14.212-58.318-63.258c0-13.975 5-25.394 13.188-34.358c-1.329-3.224-5.71-16.242 1.24-33.874c0 0 10.749-3.44 35.21 13.121c10.21-2.836 21.16-4.258 32.038-4.307c10.878.049 21.837 1.47 32.066 4.307c24.431-16.56 35.165-13.12 35.165-13.12c6.967 17.63 2.584 30.65 1.255 33.873c8.207 8.964 13.173 20.383 13.173 34.358c0 49.163-29.944 59.988-58.447 63.157c4.591 3.972 8.682 11.762 8.682 23.704c0 17.126-.148 30.91-.148 35.126c0 3.407 2.304 7.398 8.792 6.14C219.37 232.5 256 184.537 256 128.002C256 57.307 198.691 0 128.001 0m-80.06 182.34c-.282.636-1.283.827-2.194.39c-.929-.417-1.45-1.284-1.15-1.922c.276-.655 1.279-.838 2.205-.399c.93.418 1.46 1.293 1.139 1.931m6.296 5.618c-.61.566-1.804.303-2.614-.591c-.837-.892-.994-2.086-.375-2.66c.63-.566 1.787-.301 2.626.591c.838.903 1 2.088.363 2.66m4.32 7.188c-.785.545-2.067.034-2.86-1.104c-.784-1.138-.784-2.503.017-3.05c.795-.547 2.058-.055 2.861 1.075c.782 1.157.782 2.522-.019 3.08m7.304 8.325c-.701.774-2.196.566-3.29-.49c-1.119-1.032-1.43-2.496-.726-3.27c.71-.776 2.213-.558 3.315.49c1.11 1.03 1.45 2.505.701 3.27m9.442 2.81c-.31 1.003-1.75 1.459-3.199 1.033c-1.448-.439-2.395-1.613-2.103-2.626c.301-1.01 1.747-1.484 3.207-1.028c1.446.436 2.396 1.602 2.095 2.622m10.744 1.193c.036 1.055-1.193 1.93-2.715 1.95c-1.53.034-2.769-.82-2.786-1.86c0-1.065 1.202-1.932 2.733-1.958c1.522-.03 2.768.818 2.768 1.868m10.555-.405c.182 1.03-.875 2.088-2.387 2.37c-1.485.271-2.861-.365-3.05-1.386c-.184-1.056.893-2.114 2.376-2.387c1.514-.263 2.868.356 3.061 1.403"/>--}}
{{--                                                        </svg>--}}
{{--                                                        <span>Github</span>--}}
{{--                                                    </a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- End Begin page -->

{{--<x-guest-layout>--}}
{{--    <!-- Session Status -->--}}
{{--    <x-auth-session-status class="mb-4" :status="session('status')" />--}}

{{--    <form method="POST" action="{{ route('login') }}">--}}
{{--        @csrf--}}

{{--        <!-- Email Address -->--}}
{{--        <div>--}}
{{--            <x-input-label for="email" :value="__('Email')" />--}}
{{--            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />--}}
{{--            <x-input-error :messages="$errors->get('email')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Password -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="password" :value="__('Password')" />--}}

{{--            <x-text-input id="password" class="block mt-1 w-full"--}}
{{--                            type="password"--}}
{{--                            name="password"--}}
{{--                            required autocomplete="current-password" />--}}

{{--            <x-input-error :messages="$errors->get('password')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Remember Me -->--}}
{{--        <div class="block mt-4">--}}
{{--            <label for="remember_me" class="inline-flex items-center">--}}
{{--                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">--}}
{{--                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>--}}
{{--            </label>--}}
{{--        </div>--}}

{{--        <div class="flex items-center justify-end mt-4">--}}
{{--            @if (Route::has('password.request'))--}}
{{--                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">--}}
{{--                    {{ __('Forgot your password?') }}--}}
{{--                </a>--}}
{{--            @endif--}}

{{--            <x-primary-button class="ms-3">--}}
{{--                {{ __('Log in') }}--}}
{{--            </x-primary-button>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--</x-guest-layout>--}}
    <!-- End Begin page -->

    <script src="{{asset('admin/assets/libs/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('admin/assets/libs/iconify-icon/iconify-icon.min.js')}}"></script>
    <script src="{{asset('admin/assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('admin/assets/libs/node-waves/waves.min.js')}}"></script>
    <script src="{{asset('admin/assets/libs/waypoints/lib/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('admin/assets/libs/jquery.counterup/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('admin/assets/libs/feather-icons/feather.min.js')}}"></script>

    <!-- Apexcharts JS -->
    <script src="{{asset('admin/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

    <!-- Widgets Init Js -->
    <script src="{{asset('admin/assets/js/pages/crm-dashboard.init.js')}}"></script>

    <!-- App js-->
    <script src="{{asset('admin/assets/js/app.js')}}"></script>

</body>
</html>
