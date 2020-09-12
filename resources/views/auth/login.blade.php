<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login - srtdash</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="dashboard/images/icon/favicon.ico">
    <link rel="stylesheet" href="dashboard/css/bootstrap.min.css">
    <link rel="stylesheet" href="dashboard/css/font-awesome.min.css">
    <link rel="stylesheet" href="dashboard/css/themify-icons.css">
    <link rel="stylesheet" href="dashboard/css/metisMenu.css">
    <link rel="stylesheet" href="dashboard/css/owl.carousel.min.css">
    <link rel="stylesheet" href="dashboard/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="dashboard/css/typography.css">
    <link rel="stylesheet" href="dashboard/css/default-css.css">
    <link rel="stylesheet" href="dashboard/css/styles.css">
    <link rel="stylesheet" href="dashboard/css/responsive.css">
    <!-- modernizr css -->
    <script src="dashboard/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- login area start -->
    <div class="login-area">
        <div class="container">
            <div class="login-box ptb--100">
                <form method="post" action="{{ route('login') }}">{{ csrf_field() }}
                    <div class="login-form-head">
                        <h4>Admin Sign In</h4>
                        <p>Hello there, Sign in and start managing your Engineering Website</p>
                    </div>
                    <div class="login-form-body">
                        @if (Session::has('flash_message_error'))
                            <h5><font color="red">
                                <button type="button" class="close" data-dismiss="alert"></button>
                                    <strong>{!! session('flash_message_error') !!}</strong>
                            </font></h5>        
                        @endif
                        @if (Session::has('flash_message_success'))
                            <h5><font color-"green">
                                <button type="button" class="close" data-dismiss="alert"></button>
                                    <strong>{!! session('flash_message_success') !!}</strong>
                            </font></h5>       
                        @endif
                        <br>
                        <div class="form-gp">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" id="email" name="email" value="{{old('email')}}" required autofocus>
                            <i class="ti-email"></i>
                            
                                @error('email')
                                    <span>
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>
                        <div class="form-gp">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" id="password" name="password" value="{{old('password')}}" required>
                            <i class="ti-lock"></i>
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="submit-btn-area">
                            <button id="form_submit" type="submit">Submit <i class="ti-arrow-right"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- login area end -->

    <!-- jquery latest version -->
    <script src="dashboard/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="dashboard/js/popper.min.js"></script>
    <script src="dashboard/js/bootstrap.min.js"></script>
    <script src="dashboard/js/owl.carousel.min.js"></script>
    <script src="dashboard/js/metisMenu.min.js"></script>
    <script src="dashboard/js/jquery.slimscroll.min.js"></script>
    <script src="dashboard/js/jquery.slicknav.min.js"></script>
    
    <!-- others plugins -->
    <script src="dashboard/js/plugins.js"></script>
    <script src="dashboard/js/scripts.js"></script>
</body>

</html>