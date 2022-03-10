<x-custom-layout>

    <!-- The Beginning -->

    <div class="az-content az-content-dashboard">
        <div class="container">
            <div class="az-content-body">

                <div class="row row-sm mg-b-20">
                    <div class="col-lg-7 ht-lg-100p">
                        <div class="card card-dashboard-one">
                            <div class="card-header">
                                <div>
                                    <h6 class="card-title">Website Audience Metrics</h6>
                                    <p class="card-text">Audience to which the users belonged while on the current date range.</p>
                                </div>
                            </div><!-- card-header -->
                            <div class="card-body">
                                <div class="card-body-top">
                                <div>
                                    <label class="mg-b-0">Users</label>
                                    <h2>90,956</h2>
                                </div>
                                <div>
                                    <label class="mg-b-0">Bounce Rate</label>
                                    <h2>33.50%</h2>
                                </div>
                                <div>
                                    <label class="mg-b-0">Page Views</label>
                                    <h2>83,123</h2>
                                </div>
                                <div>
                                    <label class="mg-b-0">Sessions</label>
                                    <h2>16,869</h2>
                                </div>
                                </div><!-- card-body-top -->
                                <div class="flot-chart-wrapper">
                                <div id="flotChart" class="flot-chart"></div>
                                </div><!-- flot-chart-wrapper -->
                            </div><!-- card-body -->
                        </div><!-- card -->
                    </div><!-- col -->
                    <div class="col-lg-5 mg-t-20 mg-lg-t-0">
                        <div class="row row-sm">
                        <div class="col-sm-6">
                            <div class="card card-dashboard-two">
                            <div class="card-header">
                                <h6>33.50% <i class="icon ion-md-trending-up tx-success"></i> <small>18.02%</small></h6>
                                <p>Bounce Rate</p>
                            </div><!-- card-header -->
                            <div class="card-body">
                                <div class="chart-wrapper">
                                <div id="flotChart1" class="flot-chart"></div>
                                </div><!-- chart-wrapper -->
                            </div><!-- card-body -->
                            </div><!-- card -->
                        </div><!-- col -->
                        <div class="col-sm-6 mg-t-20 mg-sm-t-0">
                            <div class="card card-dashboard-two">
                            <div class="card-header">
                                <h6>86k <i class="icon ion-md-trending-down tx-danger"></i> <small>0.86%</small></h6>
                                <p>Total Users</p>
                            </div><!-- card-header -->
                            <div class="card-body">
                                <div class="chart-wrapper">
                                <div id="flotChart2" class="flot-chart"></div>
                                </div><!-- chart-wrapper -->
                            </div><!-- card-body -->
                            </div><!-- card -->
                        </div><!-- col -->
                        <div class="col-sm-12 mg-t-20">
                            <div class="card card-dashboard-three">
                            <div class="card-header">
                                <p>All Sessions</p>
                                <h6>16,869 <small class="tx-success"><i class="icon ion-md-arrow-up"></i> 2.87%</small></h6>
                                <small>The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc.</small>
                            </div><!-- card-header -->
                            <div class="card-body">
                                <div class="chart"><canvas id="chartBar5"></canvas></div>
                            </div>
                            </div>
                        </div>
                        </div><!-- row -->
                    </div><!--col -->
                </div><!-- row -->

                <div class="row row-sm mg-b-20">
                <div class="col-lg-8 mg-t-20 mg-lg-t-0">
                    <div class="card card-dashboard-four">
                    <div class="card-header">
                        <h6 class="card-title">Sessions by Channel</h6>
                    </div><!-- card-header -->
                    <div class="card-body row">
                        <div class="col-md-6 d-flex align-items-center">
                            <div class="chart">
                                <canvas id="chartDonut"></canvas>
                            </div>
                        </div><!-- col -->
                        <div class="col-md-6 col-lg-5 mg-lg-l-auto mg-t-20 mg-md-t-0">
                        <div class="az-traffic-detail-item">
                            <div>
                            <span>Organic Search</span>
                            <span>1,320 <span>(25%)</span></span>
                            </div>
                            <div class="progress">
                            <div class="progress-bar bg-purple wd-90p" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div><!-- progress -->
                        </div>
                        <div class="az-traffic-detail-item">
                            <div>
                            <span>Email</span>
                            <span>987 <span>(20%)</span></span>
                            </div>
                            <div class="progress">
                            <div class="progress-bar bg-primary wd-20p" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                            </div><!-- progress -->
                        </div>
                        <div class="az-traffic-detail-item">
                            <div>
                            <span>Referral</span>
                            <span>2,010 <span>(30%)</span></span>
                            </div>
                            <div class="progress">
                            <div class="progress-bar bg-info wd-30p" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                            </div><!-- progress -->
                        </div>
                        <div class="az-traffic-detail-item">
                            <div>
                            <span>Social</span>
                            <span>654 <span>(15%)</span></span>
                            </div>
                            <div class="progress">
                            <div class="progress-bar bg-teal wd-15p" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                            </div><!-- progress -->
                        </div>
                        <div class="az-traffic-detail-item">
                            <div>
                            <span>Other</span>
                            <span>400 <span>(10%)</span></span>
                            </div>
                            <div class="progress">
                            <div class="progress-bar bg-gray-500 wd-10p" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                            </div><!-- progress -->
                        </div>
                        </div><!-- col -->
                    </div><!-- card-body -->
                    </div><!-- card-dashboard-four -->
                </div><!-- col -->
                </div><!-- row -->

                <div class="row row-sm mg-b-20 mg-lg-b-0">
                <div class="col-lg-5 col-xl-4">
                    <div class="row row-sm">
                    <div class="col-md-6 col-lg-12 mg-b-20 mg-md-b-0 mg-lg-b-20">
                        <div class="card card-dashboard-five">
                        <div class="card-header">
                            <h6 class="card-title">Gender</h6>
                            <span class="card-text"></span>
                        </div><!-- card-header -->
                        <div class="card-body row row-sm">
                            <div class="col-6 d-sm-flex align-items-center">
                            <div class="card-chart bg-primary">
                                <span class="peity-bar" data-peity='{"fill": ["#fff"], "width": 20, "height": 20 }'>6,4,7,5,7</span>
                            </div>
                            <div>
                                <label>Male</label>
                                <h4>33.50%</h4>
                            </div>
                            </div><!-- col -->
                            <div class="col-6 d-sm-flex align-items-center">
                            <div class="card-chart bg-purple">
                                <span class="peity-bar" data-peity='{"fill": ["#fff"], "width": 21, "height": 20 }'>7,4,5,7,2</span>
                            </div>
                            <div>
                                <label>Female</label>
                                <h4>66.5%</h4>
                            </div>
                            </div><!-- col -->
                        </div><!-- card-body -->
                        </div><!-- card-dashboard-five -->
                    </div><!-- col -->
                    <div class="col-md-6 col-lg-12">
                        <div class="card card-dashboard-five">
                        <div class="card-header">
                            <h6 class="card-title">Sessions</h6>
                            <span class="card-text"> A session is the period time a user is actively engaged with your website, app, etc.</span>
                        </div><!-- card-header -->
                        <div class="card-body row row-sm">
                            <div class="col-6 d-sm-flex align-items-center">
                            <div class="mg-b-10 mg-sm-b-0 mg-sm-r-10">
                                <span class="peity-donut" data-peity='{ "fill": ["#007bff", "#cad0e8"],  "innerRadius": 14, "radius": 20 }'>6/7</span>
                            </div>
                            <div>
                                <label>% New Sessions</label>
                                <h4>90.80%</h4>
                            </div>
                            </div><!-- col -->
                            <div class="col-6 d-sm-flex align-items-center">
                            <div class="mg-b-10 mg-sm-b-0 mg-sm-r-10">
                                <span class="peity-donut" data-peity='{ "fill": ["#00cccc", "#cad0e8"],  "innerRadius": 14, "radius": 20 }'>2/7</span>
                            </div>
                            <div>
                                <label>Pages/Session</label>
                                <h4>1,005</h4>
                            </div>
                            </div><!-- col -->
                        </div><!-- card-body -->
                        </div><!-- card-dashboard-five -->
                    </div><!-- col -->
                    </div><!-- row -->
                </div><!-- col-lg-3 -->

                </div><!-- row -->
            </div><!-- az-content-body -->
        </div>
    </div><!-- az-content -->
</x-custom-layout>
