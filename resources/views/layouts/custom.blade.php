<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>Masada | Dashboard</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Masada Dashboard is a data dashboard for masada app and masada youth." />
    <meta name="keywords"
        content="philippines, maynard magallen, maynard, magallen, bongbong marcos, sara duterte, duterte, cnn, inquirer, google, flat ui, , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="Maynard Magallen" />

    <link rel="icon" href="https://colorlib.com/polygon/ek/files/images/favicon.ico" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/waves.min.css') }}" type="text/css" media="all">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/feather.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome-n.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/chartist.css') }}" type="text/css" media="all">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/widget.css') }}">
</head>

<body>

    <div class="loader-bg">
        <div class="loader-bar"></div>
    </div>

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            @include('layouts.components.top-bar')

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">

                    @include('layouts.components.navigation')

                    <div class="pcoded-content">
                        {{ $slot }}
                    </div>

                    <div id="styleSelector">
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script data-cfasync="false" src="{{ asset('js/email-decode.min.js') }}"></script>
    <script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
    <script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('js/waves.min.js') }}" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>

    <script type="d2d1d6e2f87cbebdf4013b26-text/javascript"
        src="{{ asset('js/jquery.slimscroll.js') }}"></script>

    <script src="{{ asset('js/jquery.flot.js') }}" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
    <script src="{{ asset('js/jquery.flot.categories.js') }}"
        type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
    <script src="{{ asset('js/curvedlines.js') }}" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
    <script src="{{ asset('js/jquery.flot.tooltip.min.js') }}"
        type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>

    <script src="{{ asset('js/chartist.js') }}" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>

    <script src="{{ asset('js/amcharts.js') }}" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
    <script src="{{ asset('js/serial.js') }}" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
    <script src="{{ asset('js/light.js') }}" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>

    <script src="{{ asset('js/pcoded.min.js') }}" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
    <script src="{{ asset('js/vertical-layout.min.js') }}"
        type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
    <script type="d2d1d6e2f87cbebdf4013b26-text/javascript"
        src="{{ asset('js/custom-dashboard.min.js') }}"></script>
    <script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="{{ asset('js/script.min.js') }}"></script>
    <script src="{{ asset('js/rocket-loader.min.js') }}" data-cf-settings="d2d1d6e2f87cbebdf4013b26-|49"
        defer=""></script>
</body>

</html>
