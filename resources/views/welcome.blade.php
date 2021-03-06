<x-custom-layout>
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-home bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Last Updated</h5>
                        {{--  <span>{{ $organizations->first()->updated_at->format('F jS, Y g:i A') ? 'Test'}}</span>  --}}
                        <span>{{ date('F jS, Y g:i A') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card proj-progress-card">
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-xl-3 col-md-6">
                                            <h6>Total Registration <span class="badge bg-c-green text-white">Live</span></h6>
                                            <h5 class="m-b-30 f-w-700">{{ $total_registration }}<span
                                                    class="text-c-green m-l-10">Masada</span></h5>
                                            {{--  <div class="progress">
                                                <div class="progress-bar bg-c-red"
                                                    style="width:25%"></div>
                                            </div>  --}}
                                        </div>
                                        <div class="col-xl-3 col-md-6">
                                            <h6>Total Registration <span class="badge bg-c-green text-white">Live</span></h6>
                                            <h5 class="m-b-30 f-w-700">{{ $total_registration_youth }}<span
                                                    class="text-c-green m-l-10">Youth</span></h5>
                                            {{--  <div class="progress">
                                                <div class="progress-bar bg-c-blue"
                                                    style="width:65%"></div>
                                            </div>  --}}
                                        </div>
                                        <div class="col-xl-3 col-md-6">
                                            <h6>Total Verified Registrant</h6>
                                            <h5 class="m-b-30 f-w-700">- No Data -</h5>
                                            {{--  <div class="progress">
                                                <div class="progress-bar bg-c-green"
                                                    style="width:85%"></div>
                                            </div>  --}}
                                        </div>
                                        <div class="col-xl-3 col-md-6">
                                            <h6>Total Organization <span class="badge bg-c-green text-white">Live</span></h6>
                                            <h5 class="m-b-30 f-w-700">{{ $total_organizations }}</h5>
                                            {{--  <div class="progress">
                                                <div class="progress-bar bg-c-yellow"
                                                    style="width:45%"></div>
                                            </div>  --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{--  <div class="col-md-12 col-xl-8">
                            <div class="card sale-card">
                                <div class="card-header">
                                    <h5>Deals Analytics</h5>
                                    <div class="card-header-right">
                                        <ul class="list-unstyled card-option">
                                            <li class="first-opt"><i
                                                    class="feather icon-chevron-left open-card-option"></i>
                                            </li>
                                            <li>
                                                <i class="feather icon-maximize full-card"></i></li>
                                            <li>
                                                <i class="feather icon-minus minimize-card"></i>
                                            </li>
                                            <li>
                                                <i class="feather icon-refresh-cw reload-card"></i>
                                            </li>
                                            <li>
                                                <i class="feather icon-trash close-card"></i></li>
                                            <li>
                                                <iclass="feather icon-chevron-left open-card-option"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-block p-b-0">
                                    <div class="table-responsive">
                                        <table class="table table-hover m-b-0">
                                            <thead>
                                                <tr>
                                                    <th>Organization</th>
                                                    <th>Product Code</th>
                                                    <th>Customer</th>
                                                    <th>Status</th>
                                                    <th>Rating</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Sofa</td>
                                                    <td>#PHD001</td>
                                                    <td><a href="https://colorlib.com/cdn-cgi/l/email-protection"
                                                            class="__cf_email__"
                                                            data-cfemail="29484b4a694e44484045074a4644">[email&#160;protected]</a>
                                                    </td>
                                                    <td><label class="label label-danger">Out
                                                            Stock</label></td>
                                                    <td>
                                                        <a href="#!"><i
                                                                class="fa fa-star f-12 text-c-yellow"></i></a>
                                                        <a href="#!"><i
                                                                class="fa fa-star f-12 text-c-yellow"></i></a>
                                                        <a href="#!"><i
                                                                class="fa fa-star f-12 text-c-yellow"></i></a>
                                                        <a href="#!"><i
                                                                class="fa fa-star f-12 text-default"></i></a>
                                                        <a href="#!"><i
                                                                class="fa fa-star f-12 text-default"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Computer</td>
                                                    <td>#PHD002</td>
                                                    <td><a href="https://colorlib.com/cdn-cgi/l/email-protection"
                                                            class="__cf_email__"
                                                            data-cfemail="e6858285a6818b878f8ac885898b">[email&#160;protected]</a>
                                                    </td>
                                                    <td><label class="label label-success">In
                                                            Stock</label></td>
                                                    <td>
                                                        <a href="#!"><i
                                                                class="fa fa-star f-12 text-c-yellow"></i></a>
                                                        <a href="#!"><i
                                                                class="fa fa-star f-12 text-c-yellow"></i></a>
                                                        <a href="#!"><i
                                                                class="fa fa-star f-12 text-default"></i></a>
                                                        <a href="#!"><i
                                                                class="fa fa-star f-12 text-default"></i></a>
                                                        <a href="#!"><i
                                                                class="fa fa-star f-12 text-default"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Mobile</td>
                                                    <td>#PHD003</td>
                                                    <td><a href="https://colorlib.com/cdn-cgi/l/email-protection"
                                                            class="__cf_email__"
                                                            data-cfemail="afdfdeddefc8c2cec6c381ccc0c2">[email&#160;protected]</a>
                                                    </td>
                                                    <td><label class="label label-danger">Out
                                                            Stock</label></td>
                                                    <td>
                                                        <a href="#!"><i
                                                                class="fa fa-star f-12 text-c-yellow"></i></a>
                                                        <a href="#!"><i
                                                                class="fa fa-star f-12 text-c-yellow"></i></a>
                                                        <a href="#!"><i
                                                                class="fa fa-star f-12 text-c-yellow"></i></a>
                                                        <a href="#!"><i
                                                                class="fa fa-star f-12 text-c-yellow"></i></a>
                                                        <a href="#!"><i
                                                                class="fa fa-star f-12 text-default"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Coat</td>
                                                    <td>#PHD004</td>
                                                    <td><a href="https://colorlib.com/cdn-cgi/l/email-protection"
                                                            class="__cf_email__"
                                                            data-cfemail="a7c5c4d4e7c0cac6cecb89c4c8ca">[email&#160;protected]</a>
                                                    </td>
                                                    <td><label class="label label-success">In
                                                            Stock</label></td>
                                                    <td>
                                                        <a href="#!"><i
                                                                class="fa fa-star f-12 text-c-yellow"></i></a>
                                                        <a href="#!"><i
                                                                class="fa fa-star f-12 text-c-yellow"></i></a>
                                                        <a href="#!"><i
                                                                class="fa fa-star f-12 text-c-yellow"></i></a>
                                                        <a href="#!"><i
                                                                class="fa fa-star f-12 text-default"></i></a>
                                                        <a href="#!"><i
                                                                class="fa fa-star f-12 text-default"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Watch</td>
                                                    <td>#PHD005</td>
                                                    <td><a href="https://colorlib.com/cdn-cgi/l/email-protection"
                                                            class="__cf_email__"
                                                            data-cfemail="5e3d3a3d1e39333f3732703d3133">[email&#160;protected]</a>
                                                    </td>
                                                    <td><label class="label label-success">In
                                                            Stock</label></td>
                                                    <td>
                                                        <a href="#!"><i
                                                                class="fa fa-star f-12 text-c-yellow"></i></a>
                                                        <a href="#!"><i
                                                                class="fa fa-star f-12 text-c-yellow"></i></a>
                                                        <a href="#!"><i
                                                                class="fa fa-star f-12 text-default"></i></a>
                                                        <a href="#!"><i
                                                                class="fa fa-star f-12 text-default"></i></a>
                                                        <a href="#!"><i
                                                                class="fa fa-star f-12 text-default"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Shoes</td>
                                                    <td>#PHD006</td>
                                                    <td><a href="https://colorlib.com/cdn-cgi/l/email-protection"
                                                            class="__cf_email__"
                                                            data-cfemail="c5b5b4b785a2a8a4aca9eba6aaa8">[email&#160;protected]</a>
                                                    </td>
                                                    <td><label class="label label-danger">Out
                                                            Stock</label></td>
                                                    <td>
                                                        <a href="#!"><i
                                                                class="fa fa-star f-12 text-c-yellow"></i></a>
                                                        <a href="#!"><i
                                                                class="fa fa-star f-12 text-c-yellow"></i></a>
                                                        <a href="#!"><i
                                                                class="fa fa-star f-12 text-c-yellow"></i></a>
                                                        <a href="#!"><i
                                                                class="fa fa-star f-12 text-c-yellow"></i></a>
                                                        <a href="#!"><i
                                                                class="fa fa-star f-12 text-default"></i></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-xl-4">
                            <div class="card comp-card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-b-25">Impressions</h6>
                                            <h3 class="f-w-700 text-c-blue">1,563</h3>
                                            <p class="m-b-0">May 23 - June 01 (2017)</p>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-eye bg-c-blue"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card comp-card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-b-25">Goal</h6>
                                            <h3 class="f-w-700 text-c-green">30,564</h3>
                                            <p class="m-b-0">May 23 - June 01 (2017)</p>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-bullseye bg-c-green"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card comp-card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-b-25">Impact</h6>
                                            <h3 class="f-w-700 text-c-yellow">42.6%</h3>
                                            <p class="m-b-0">May 23 - June 01 (2017)</p>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-hand-paper bg-c-yellow"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  --}}

                        <div class="col-xl-3 col-md-6">
                            <div class="card social-res-card">
                                <div class="card-header">
                                    <h5>Rank by Organization <span class="badge bg-c-green text-white">Live</span></h5>
                                </div>
                                <div class="card-body">
                                    @forelse ($organizations as $key => $total_organization)
                                        <p class="m-b-10">{{ $total_organization->name }}</p>
                                        <div class="progress m-b-30">
                                            <div class="progress-bar bg-twitter" style="width:{{ $total_organization->percentage }}%">
                                            </div>
                                        </div>
                                    @empty
                                        <p class="m-b-10">- Insufficient Data -</p>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card social-res-card">
                                <div class="card-header">
                                    <h5>Rank by Headquarters</h5>
                                </div>
                                <div class="card-body">
                                    @forelse ($rank_by_headquarters as $rank_by_headquarter)
                                        <p class="m-b-10">Wall Profile</p>
                                        <div class="progress m-b-30">
                                            <div class="progress-bar bg-twitter" style="width:85%">
                                            </div>
                                        </div>
                                    @empty
                                        <p class="m-b-10">- Insufficient Data -</p>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card social-res-card">
                                <div class="card-header">
                                    <h5>Rank by Civil Status <span class="badge bg-c-green text-white">Live</span></h5>
                                </div>
                                <div class="card-body">
                                    @forelse ($civil_status as $civil)
                                        <p class="m-b-10">{{ $civil->name }}</p>
                                        <div class="progress m-b-30">
                                            <div class="progress-bar bg-twitter" style="width:{{ $civil->percentage }}%">
                                            </div>
                                        </div>
                                    @empty
                                        <p class="m-b-10">- Insufficient Data -</p>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card sale-card ">
                                <div class="card-header">
                                    <h5>Gender <span class="badge bg-c-green text-white">Live</span></h5>
                                </div>
                                <div class="card-block text-center">
                                    {{--  <div data-label="40%" class="radial-bar radial-bar-40 radial-bar-lg radial-bar-danger">
                                    </div>  --}}
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="s-caption bg-c-red "></div>
                                            <div class="s-cont d-inline-block">
                                                <h5 class="f-w-700 m-b-0">
                                                    @if(!empty($gender->skip(1)->first()->percentage))
                                                        {{ $gender->skip(1)->first()->percentage }}%
                                                    @else
                                                        - Insufficient Data -
                                                    @endif
                                                </h5>
                                                <p class="m-b-0">Female</p>
                                            </div>
                                        </div>
                                        <div class="col-6 b-l-default">
                                            <div class="s-caption bg-default"></div>
                                            <div class="s-cont d-inline-block">
                                                <h5 class="f-w-700 m-b-0">
                                                    @if(!empty($gender->first()->percentage))
                                                        {{ $gender->first()->percentage }}%</h5>
                                                    @else
                                                        - Insufficient Data -
                                                    @endif
                                                <p class="m-b-0">Male</p>
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
    </div>
</x-custom-layout>
