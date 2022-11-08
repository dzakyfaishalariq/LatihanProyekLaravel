<!doctype html>
<html class="no-js " lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>{{ $title }}</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

    <!-- Custom Css -->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/color_skins.css">
</head>

<body class="theme-black">
    <div class="authentication">
        <div class="container">
            <div class="col-md-12 content-center">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="company_detail">
                            <h4 class="logo"><img src="assets/images/logo.svg" alt=""> PLK</h4>
                            <h3> Penjadwalan <strong>Ruangan CBT</strong> Poltekes Kemenkes Bengkulu</h3>
                            <p>Pengambangan Aplikasi Penjadwalan Ruangan</p>
                            <div class="footer">
                                <ul class="social_link list-unstyled">
                                    <li><a href="https://thememakker.com" title="ThemeMakker"><i
                                                class="zmdi zmdi-globe"></i></a></li>
                                    <li><a href="https://themeforest.net/user/thememakker" title="Themeforest"><i
                                                class="zmdi zmdi-shield-check"></i></a></li>
                                    <li><a href="https://www.linkedin.com/company/thememakker/" title="LinkedIn"><i
                                                class="zmdi zmdi-linkedin"></i></a></li>
                                    <li><a href="https://www.facebook.com/thememakkerteam" title="Facebook"><i
                                                class="zmdi zmdi-facebook"></i></a></li>
                                    <li><a href="http://twitter.com/thememakker" title="Twitter"><i
                                                class="zmdi zmdi-twitter"></i></a></li>
                                    <li><a href="http://plus.google.com/+thememakker" title="Google plus"><i
                                                class="zmdi zmdi-google-plus"></i></a></li>
                                    <li><a href="https://www.behance.net/thememakker" title="Behance"><i
                                                class="zmdi zmdi-behance"></i></a></li>
                                </ul>
                                <hr>
                                <ul>
                                    <li><a href="http://thememakker.com/contact/" target="_blank">Contact Us</a></li>
                                    <li><a href="http://thememakker.com/about/" target="_blank">About Us</a></li>
                                    <li><a href="http://thememakker.com/services/" target="_blank">Services</a></li>
                                    <li><a href="javascript:void(0);">FAQ</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 offset-lg-1">
                        <div class="card-plain">
                            <div class="header">
                                <h5>Log in</h5>
                            </div>
                            <form action="{{ route('l_system') }}" method="POST" class="form">
                                @csrf
                                <div class="input-group">
                                    <input type="text" name="username"
                                        class="form-control @error('username') is-invalid @enderror"
                                        placeholder="User Name" value="{{ old('username') }}">
                                    <span class="input-group-addon"><i class="zmdi zmdi-account-circle"></i></span>
                                </div>
                                <div class="input-group">
                                    <input type="password" name="password" placeholder="Password"
                                        class="form-control" />
                                    <span class="input-group-addon"><i class="zmdi zmdi-lock"></i></span>
                                </div>
                                <div class="footer">
                                    {{-- <a href="index.html" class="btn btn-primary btn-round btn-block">SIGN IN</a> --}}
                                    <button type="submit" class="btn btn-primary btn-round btn-block">SING IN</button>
                                    <a href="{{ route('register') }}"
                                        class="btn btn-primary btn-simple btn-round btn-block">SIGN
                                        UP</a>
                                </div>
                            </form>
                            <a href="forgot-password.html" class="link">Forgot Password?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Jquery Core Js -->
    <script src="assets/bundles/libscripts.bundle.js"></script>
    <script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
</body>

</html>
