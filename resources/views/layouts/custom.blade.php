<!DOCTYPE html>
<html lang="zxx">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Maynard Magallen</title>


    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/vendors/themefy_icon/themify-icons.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/vendors/swiper_slider/css/swiper.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/vendors/select2/css/select2.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/vendors/niceselect/css/nice-select.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/vendors/owl_carousel/css/owl.carousel.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/vendors/gijgo/gijgo.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/vendors/font_awesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/tagsinput/tagsinput.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/vendors/datatable/css/jquery.dataTables.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/datatable/css/responsive.dataTables.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/datatable/css/buttons.dataTables.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/vendors/text_editor/summernote-bs4.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/vendors/morris/morris.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/vendors/material_icon/material-icons.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/css/metisMenu.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/colors/default.css') }}" id="colorSkinCSS">
</head>

<body class="crm_body_bg">

    @include('layouts.components.navigation')

    <section class="main_content dashboard_part">

        <div class="main_content_iner ">
            <div class="container-fluid plr_30 body_white_bg pt_30">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="single_element">
                            <div class="quick_activity">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="quick_activity_wrap">
                                            <div class="single_quick_activity">
                                                <h4># of Users</h4>
                                                <h3><span class="counter">5,79,000</span> </h3>
                                                <p>Masada</p>
                                            </div>
                                            <div class="single_quick_activity">
                                                <h4># of Users</h4>
                                                <h3><span class="counter">79,000</span> </h3>
                                                <p>Masada Youth</p>
                                            </div>
                                            <div class="single_quick_activity">
                                                <h4>Total verified Users</h4>
                                                <h3><span class="counter">92,000</span> </h3>
                                                <p></p>
                                            </div>
                                            <div class="single_quick_activity">
                                                <h4># of HeadQuarters</h4>
                                                <h3><span class="counter">1,79,000</span> </h3>
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 ">
                        <div class="white_box box_border mb_30 min_430">
                            <div class="box_header  box_header_block">
                                <div class="main-title">
                                    <h3 class="mb-0">Gender</h3>
                                </div>
                            </div>
                            <div id="radial_2"></div>
                            <div class="radial_footer">
                                <div class="radial_footer_inner d-flex justify-content-between">
                                    <div class="left_footer">
                                        <h5> <span style="background-color: #EDECFE;"></span> Male</h5>
                                        <p>18,570</p>
                                    </div>
                                    <div class="left_footer">
                                        <h5> <span style="background-color: #A4A1FB;"></span> Female</h5>
                                        <p>31,430</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="footer_part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer_iner text-center">
                            <p>{{ date('Y') }} - <a href="https://masada.app/">
                                    Masada</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>

    <script src="{{ asset('assets/js/popper.min.js') }}"></script>

    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('assets/js/metisMenu.js') }}"></script>

    <script src="{{ asset('assets/vendors/count_up/jquery.waypoints.min.js') }}"></script>

    <script src="{{ asset('assets/vendors/chartlist/Chart.min.js') }}"></script>

    <script src="{{ asset('assets/vendors/count_up/jquery.counterup.min.js') }}"></script>

    <script src="{{ asset('assets/vendors/swiper_slider/js/swiper.min.js') }}"></script>

    <script src="{{ asset('assets/vendors/niceselect/js/jquery.nice-select.min.js') }}"></script>

    <script src="{{ asset('assets/vendors/owl_carousel/js/owl.carousel.min.js') }}"></script>

    <script src="{{ asset('assets/vendors/gijgo/gijgo.min.js') }}"></script>

    <script src="{{ asset('assets/vendors/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatable/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatable/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatable/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatable/js/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatable/js/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatable/js/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatable/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatable/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/js/chart.min.js') }}"></script>

    <script src="{{ asset('assets/vendors/progressbar/jquery.barfiller.js') }}"></script>

    <script src="{{ asset('assets/vendors/tagsinput/tagsinput.js') }}"></script>

    <script src="{{ asset('assets/vendors/text_editor/summernote-bs4.js') }}"></script>
    <script src="{{ asset('assets/vendors/apex_chart/apexcharts.js') }}"></script>

    <script src="{{ asset('assets/js/custom.js') }}"></script>

    <script src="js/active_chart2.js"></script>
    <script src="{{ asset('assets/vendors/apex_chart/radial_active_min.js') }}"></script>
    <script src="{{ asset('assets/vendors/apex_chart/stackbar2.js') }}"></script>
    <script src="{{ asset('assets/vendors/apex_chart/area_chart.js') }}"></script>

    <script src="{{ asset('assets/vendors/apex_chart/bar_active_2.js') }}"></script>
    <script src="{{ asset('assets/vendors/chartjs/chartjs_active2.js') }}"></script>

</body>

</html>

