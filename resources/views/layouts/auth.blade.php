<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>Masada | Authorization</title>

    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Masada Dashboard is a data dashboard for masada app and masada youth." />
    <meta name="keywords"
        content="philippines, maynard magallen, maynard, magallen, bongbong marcos, sara duterte, duterte, cnn, inquirer, google, flat ui, , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="Maynard Magallen" />

    <link rel="icon" href="https://colorlib.com/polygon/admindek/files/assets/images/favicon.ico" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/waves.min.css') }}" type="text/css" media="all">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/feather.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/themify-icons.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/icofont.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pages.css') }}">
</head>

<body themebg-pattern="theme1">

    <div class="theme-loader">
        <div class="loader-track">
            <div class="preloader-wrapper">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="login-block">

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">

                    <form class="md-float-material form-material">
                        <div class="text-center">
                            <img src="png/logo.png" alt="logo.png">
                        </div>
                        <div class="auth-box card">
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3 class="text-center"><i class="icofont icofont-lock text-primary f-80"></i>
                                        </h3>
                                    </div>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="text" name="email" class="form-control" required="">
                                    <span class="form-bar"></span>
                                    <label class="float-label">Your Email Address</label>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="button"
                                            class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20"><i
                                                class="icofont icofont-lock"></i> Lock Screen </button>
                                    </div>
                                </div>
                                <p class="text-inverse text-right">Back to <a href="\login">Login</a>
                                </p>
                            </div>
                        </div>
                    </form>

                </div>

            </div>

        </div>

    </section>


    <!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="../files/assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="../files/assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="../files/assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="../files/assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="../files/assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->


    <script type="7aae4511ef34ee677bf846a7-text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="7aae4511ef34ee677bf846a7-text/javascript" src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <script type="7aae4511ef34ee677bf846a7-text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
    <script type="7aae4511ef34ee677bf846a7-text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('js/waves.min.js') }}" type="7aae4511ef34ee677bf846a7-text/javascript"></script>

    <script type="7aae4511ef34ee677bf846a7-text/javascript" src="{{ asset('js/jquery.slimscroll.js') }}"></script>

    <script type="7aae4511ef34ee677bf846a7-text/javascript" src="{{ asset('js/modernizr.js') }}"></script>
    <script type="7aae4511ef34ee677bf846a7-text/javascript" src="{{ asset('js/css-scrollbars.js') }}"></script>

    <script type="7aae4511ef34ee677bf846a7-text/javascript" src="{{ asset('js/i18next.min.js') }}"></script>
    <script type="7aae4511ef34ee677bf846a7-text/javascript" src="{{ asset('js/i18nextxhrbackend.min.js') }}"></script>
    <script type="7aae4511ef34ee677bf846a7-text/javascript" src="{{ asset('js/i18nextbrowserlanguagedetector.min.js') }}"></script>
    <script type="7aae4511ef34ee677bf846a7-text/javascript" src="{{ asset('js/jquery-i18next.min.js') }}"></script>

    <script type="7aae4511ef34ee677bf846a7-text/javascript" src="js/common-pages.js"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"
        type="7aae4511ef34ee677bf846a7-text/javascript"></script>
    <script type="7aae4511ef34ee677bf846a7-text/javascript">
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
    </script>
    <script src="{{ asset('js/rocket-loader.min.js') }}" data-cf-settings="7aae4511ef34ee677bf846a7-|49" defer=""></script>
</body>

</html>
