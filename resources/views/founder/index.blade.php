@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/examples/css/dashboard/ecommerce.min599c.css?v4.0.2') }}">
    <link rel="stylesheet" href="{{ asset('global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.min599c.css?v4.0.2') }}">
@endsection

@section('content')

  <!-- Page -->
  <div class="page">
    <div class="page-header h-300 mb-30">
      <div class="text-center blue-grey-800 m-0 mt-50">
        <div class="font-size-50 mb-30 blue-grey-800">Founder's Dashboard</div>
        <ul class="list-inline font-size-14">
          {{--  <li class="list-inline-item">
            <i class="icon wb-map mr-5" aria-hidden="true"></i> Central and southern
            Alaska
          </li>
          <li class="list-inline-item ml-20">
            <i class="icon wb-heart mr-5" aria-hidden="true"></i> 26,428
          </li>  --}}
        </ul>
      </div>
    </div>

    <div class="page-content container-fluid">
        
      <div class="row" data-plugin="matchHeight" data-by-row="true">
        <div class="col-xxl-3 col-xl-4">
          <!-- Panel Web Designer -->
          <div class="card card-shadow">
            <div class="card-block text-center bg-white p-40">
              <div class="avatar avatar-100 mb-20">
                <img src="../../global/portraits/1.jpg" alt="">
              </div>
              <p class="font-size-20 blue-grey-700"> {{ Auth::user()->name }} </p>
              <p class="blue-grey-400 mb-20">{{ Auth::user()->user_level }}</p>
              <p class="mb-35">{{ Auth::user()->profile->biography }}
                </p>
              <ul class="list-inline font-size-18 mb-35">
                <li class="list-inline-item">
                  <a class="blue-grey-400" href="javascript:void(0)">
                  <i class="icon bd-twitter" aria-hidden="true"></i>
                </a>
                </li>
                <li class="list-inline-item ml-10">
                  <a class="blue-grey-400" href="javascript:void(0)">
                  <i class="icon bd-facebook" aria-hidden="true"></i>
                </a>
                </li>
                <li class="list-inline-item ml-10">
                  <a class="blue-grey-400" href="javascript:void(0)">
                  <i class="icon bd-dribbble" aria-hidden="true"></i>
                </a>
                </li>
                <li class="list-inline-item ml-10">
                  <a class="blue-grey-400" href="javascript:void(0)">
                  <i class="icon bd-instagram" aria-hidden="true"></i>
                </a>
                </li>
              </ul>
              {{--  <button type="button" class="btn btn-primary px-40">Follow</button>  --}}
            </div>
          </div>
          <!-- End Panel Web Designer -->
        </div>


        {{--  <div class="col-xxl-6 col-xl-8">
          <!-- Panel Traffic -->
          <div class="card card-shadow example-responsive" id="widgetLinearea">
            <div class="card-block p-30" style="min-width:480px;">
              <div class="row pb-20" style="height:calc(100% - 322px);">
                <div class="col-md-8 col-sm-6">
                  <div class="blue-grey-700">YOUR TRAFFIC VIEWS</div>
                </div>
                <div class="col-md-4 col-sm-6">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="counter counter-md">
                        <div class="counter-number-group text-nowrap">
                          <span class="counter-number">76</span>
                          <span class="counter-number-related">%</span>
                        </div>
                        <div class="counter-label blue-grey-400">PC Browser</div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="counter counter-md">
                        <div class="counter-number-group text-nowrap">
                          <span class="counter-number">24</span>
                          <span class="counter-number-related">%</span>
                        </div>
                        <div class="counter-label blue-grey-400">Mobile Phone</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="ct-chart mb-30" style="height:270px;"></div>
              <ul class="list-inline text-center mb-0">
                <li class="list-inline-item">
                  <i class="icon wb-large-point blue-200 mr-10" aria-hidden="true"></i>                  PC BROWSER
                </li>
                <li class="list-inline-item ml-35">
                  <i class="icon wb-large-point teal-200 mr-10" aria-hidden="true"></i>                  MOBILE PHONE
                </li>
              </ul>
            </div>
          </div>
          <!-- End Panel Traffic -->
        </div>  --}}

        <div class="col-xxl-3">
          <div class="row h-full">
            <div class="col-xxl-12 col-lg-6 h-p50 h-only-lg-p100 h-only-xl-p100">
              <!-- Panel Overall Sales -->
              <div class="card card-shadow card-inverse bg-blue-600 white">
                <div class="card-block p-30">
                  <div class="counter counter-lg counter-inverse text-left">
                    <div class="counter-label mb-20">
                      <div>Users</div>
                    </div>
                    <div class="counter-number-group mb-15">
                      {{--  <span class="counter-number-related">$</span>  --}}
                    <span class="counter-number">{{ count(Auth::user()->getAllUsers()) }}</span>
                    </div>
                    <div class="counter-label">
                      <div class="progress progress-xs mb-10 bg-blue-800">
                        <div class="progress-bar progress-bar-info bg-white" style="width: 42%" aria-valuemax="100"
                          aria-valuemin="0" aria-valuenow="42" role="progressbar">
                          <span class="sr-only">42%</span>
                        </div>
                      </div>
                      <div class="counter counter-sm text-left">
                        <div class="counter-number-group">
                          <span class="counter-number font-size-14">42%</span>
                          <span class="counter-number-related font-size-14">HIGHER THAN LAST MONTH</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Panel Overall Sales -->
            </div>

            <div class="col-xxl-12 col-lg-6 h-p50 h-only-lg-p100 h-only-xl-p100">
              <!-- Panel Today's Sales -->
              <div class="card card-shadow card-inverse bg-red-600 white">
                <div class="card-block p-30">
                  <div class="counter counter-lg counter-inverse text-left">
                    <div class="counter-label mb-20">
                      <div>Uploads</div>
                      {{--  <div>Lorem ipsum dolor sit amet</div>  --}}
                    </div>
                    <div class="counter-number-group mb-10">
                      {{--  <span class="counter-number-related">$</span>  --}}
                      <span class="counter-number"> {{count(Auth::user()->getAllUploads())}} </span>
                    </div>
                    <div class="counter-label">
                      <div class="progress progress-xs mb-10 bg-red-800">
                        <div class="progress-bar progress-bar-info bg-white" style="width: 70%" aria-valuemax="100"
                          aria-valuemin="0" aria-valuenow="70" role="progressbar">
                          <span class="sr-only">70%</span>
                        </div>
                      </div>
                      <div class="counter counter-sm text-left">
                        <div class="counter-number-group">
                          <span class="counter-number font-size-14">70%</span>
                          <span class="counter-number-related font-size-14">HIGHER THAN LAST MONTH</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Panel Today's Sales -->
            </div>
          </div>
        </div>
      </div>

      
      <div class="row" data-plugin="matchHeight" data-by-row="true">
        <div class="col-xl-4 col-lg-6">
          <!-- Panel Followers -->
          <div class="panel" id="followers">
            <div class="panel-heading">
              <h3 class="panel-title">
                Followers
              </h3>
              <div class="panel-actions panel-actions-keep">
                <div class="dropdown">
                  <a class="panel-action" id="examplePanelDropdown" data-toggle="dropdown" href="#"
                    aria-expanded="false" role="button"><i class="icon wb-more-vertical" aria-hidden="true"></i></a>
                  <div class="dropdown-menu dropdown-menu-bullet dropdown-menu-right" aria-labelledby="examplePanelDropdown"
                    role="menu">
                    <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-flag" aria-hidden="true"></i> Action</a>
                    <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-print" aria-hidden="true"></i> Another action</a>
                    <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-heart" aria-hidden="true"></i> Something else here</a>
                    <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-share" aria-hidden="true"></i> Separated link</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="panel-body">
              <ul class="list-group list-group-dividered list-group-full h-300" data-plugin="scrollable">
                <div data-role="container">
                  <div data-role="content">
                    <li class="list-group-item">
                      <div class="media">
                        <div class="pr-20">
                          <a class="avatar avatar-online" href="javascript:void(0)">
                            <img src="../../global/portraits/9.jpg" alt="">
                            <i></i>
                          </a>
                        </div>
                        <div class="media-body w-full">
                          <div class="float-right">
                            <button type="button" class="btn btn-outline btn-default btn-sm">Follow</button>
                          </div>
                          <div>
                            <span>Willard Wood</span>
                          </div>
                          <small>@heavybutterfly920</small>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="media">
                        <div class="pr-20">
                          <a class="avatar avatar-away" href="javascript:void(0)">
                            <img src="../../global/portraits/10.jpg" alt="">
                            <i></i>
                          </a>
                        </div>
                        <div class="media-body w-full">
                          <div class="float-right">
                            <button type="button" class="btn btn-success btn-sm"><i class="icon wb-check" aria-hidden="true"></i>Following</button>
                          </div>
                          <div>
                            <span>Ronnie Ellis</span>
                          </div>
                          <small>@kingronnie24</small>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="media">
                        <div class="pr-20">
                          <a class="avatar avatar-busy" href="javascript:void(0)">
                            <img src="../../global/portraits/11.jpg" alt="">
                            <i></i>
                          </a>
                        </div>
                        <div class="media-body w-full">
                          <div class="float-right">
                            <button type="button" class="btn btn-outline btn-default btn-sm">Follow</button>
                          </div>
                          <div>
                            <span>Gwendolyn Wheeler</span>
                          </div>
                          <small>@perttygirl66</small>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="media">
                        <div class="pr-20">
                          <a class="avatar avatar-off" href="javascript:void(0)">
                            <img src="../../global/portraits/12.jpg" alt="">
                            <i></i>
                          </a>
                        </div>
                        <div class="media-body w-full">
                          <div class="float-right">
                            <button type="button" class="btn btn-outline btn-default btn-sm">Follow</button>
                          </div>
                          <div>
                            <span>Daniel Russell</span>
                          </div>
                          <small>@danieltiger08</small>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="media">
                        <div class="pr-20">
                          <a class="avatar avatar-online" href="javascript:void(0)">
                            <img src="../../global/portraits/9.jpg" alt="">
                            <i></i>
                          </a>
                        </div>
                        <div class="media-body w-full">
                          <div class="float-right">
                            <button type="button" class="btn btn-outline btn-default btn-sm">Follow</button>
                          </div>
                          <div>
                            <span>Willard Wood</span>
                          </div>
                          <small>@heavybutterfly920</small>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="media">
                        <div class="pr-20">
                          <a class="avatar avatar-away" href="javascript:void(0)">
                            <img src="../../global/portraits/10.jpg" alt="">
                            <i></i>
                          </a>
                        </div>
                        <div class="media-body w-full">
                          <div class="float-right">
                            <button type="button" class="btn btn-success btn-sm"><i class="icon wb-check" aria-hidden="true"></i>Following</button>
                          </div>
                          <div>
                            <span>Ronnie Ellis</span>
                          </div>
                          <small>@kingronnie24</small>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="media">
                        <div class="pr-20">
                          <a class="avatar avatar-busy" href="javascript:void(0)">
                            <img src="../../global/portraits/11.jpg" alt="">
                            <i></i>
                          </a>
                        </div>
                        <div class="media-body w-full">
                          <div class="float-right">
                            <button type="button" class="btn btn-outline btn-default btn-sm">Follow</button>
                          </div>
                          <div>
                            <span>Gwendolyn Wheeler</span>
                          </div>
                          <small>@perttygirl66</small>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="media">
                        <div class="pr-20">
                          <a class="avatar avatar-off" href="javascript:void(0)">
                            <img src="../../global/portraits/12.jpg" alt="">
                            <i></i>
                          </a>
                        </div>
                        <div class="media-body w-full">
                          <div class="float-right">
                            <button type="button" class="btn btn-outline btn-default btn-sm">Follow</button>
                          </div>
                          <div>
                            <span>Daniel Russell</span>
                          </div>
                          <small>@danieltiger08</small>
                        </div>
                      </div>
                    </li>
                  </div>
                </div>
              </ul>
            </div>
          </div>
          <!-- End Panel Followers -->
        </div>

        <div class="col-xl-4 col-lg-6">
          <!-- Panel Tickets -->
          <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">Orders</h3>
              <div class="panel-actions panel-actions-keep">
                <div class="dropdown">
                  <a class="panel-action" id="examplePanelDropdown" data-toggle="dropdown" href="#"
                    aria-expanded="false" role="button"><i class="icon wb-more-vertical" aria-hidden="true"></i></a>
                  <div class="dropdown-menu dropdown-menu-bullet dropdown-menu-right" aria-labelledby="examplePanelDropdown"
                    role="menu">
                    <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-flag" aria-hidden="true"></i> Action</a>
                    <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-print" aria-hidden="true"></i> Another action</a>
                    <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-heart" aria-hidden="true"></i> Something else here</a>
                    <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-share" aria-hidden="true"></i> Separated link</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="panel-body">
              <ul class="list-group list-group-dividered list-group-full h-300" data-plugin="scrollable">
                <div data-role="container">
                  <div data-role="content">
                    <li class="list-group-item justify-content-between">
                      <small class="badge badge-round badge-info float-right">Completed</small>
                      <p>
                        <span>Server unavaible</span>
                        <span>[13060]</span>
                      </p>
                      <small>Opened by
                        <a class="hightlight" href="javascript:void(0)">
                          <span class="avatar avatar-xs">
                            <img src="../../global/portraits/1.jpg" alt="">
                          </span>
                          <span>Herman Beck</span>
                        </a>
                        <time datetime="2018-07-01T08:55">2 hours ago</time>
                      </small>
                    </li>
                    <li class="list-group-item justify-content-between">
                      <small class="badge badge-round badge-warning float-right">Pendening</small>
                      <p>
                        <span>Mobile App Problem</span>
                        <span>[13061]</span>
                      </p>
                      <small>Opened by
                        <a class="hightlight" href="javascript:void(0)">
                          <span class="avatar avatar-xs">
                            <img src="../../global/portraits/2.jpg" alt="">
                          </span>
                          <span>Mary Adams</span>
                        </a>
                        <time datetime="2018-07-01T07:55">1 hour ago</time>
                      </small>
                    </li>
                    <li class="list-group-item justify-content-between">
                      <small class="badge badge-round badge-primary float-right">In progress</small>
                      <p>
                        <span>IE8 problem</span>
                        <span>[13062]</span>
                      </p>
                      <small>Opened by
                        <a class="hightlight" href="javascript:void(0)">
                          <span class="avatar avatar-xs">
                            <img src="../../global/portraits/3.jpg" alt="">
                          </span>
                          <span>Caleb Richards</span>
                        </a>
                        <time datetime="2018-06-28T21:05">3 days ago</time>
                      </small>
                    </li>
                    <li class="list-group-item justify-content-between">
                      <small class="badge badge-round badge-danger float-right">Rejected</small>
                      <p>
                        <span>Respoonsive problem</span>
                        <span>[13063]</span>
                      </p>
                      <small>Opened by
                        <a class="hightlight" href="javascript:void(0)">
                          <span class="avatar avatar-xs">
                            <img src="../../global/portraits/4.jpg" alt="">
                          </span>
                          <span>June Lane</span>
                        </a>
                        <time datetime="2018-06-27T13:05">4 days ago</time>
                      </small>
                    </li>
                    <li class="list-group-item justify-content-between">
                      <small class="badge badge-round badge-info float-right">Completed</small>
                      <p>
                        <span>Server unavaible</span>
                        <span>[13060]</span>
                      </p>
                      <small>Opened by
                        <a class="hightlight" href="javascript:void(0)">
                          <span class="avatar avatar-xs">
                            <img src="../../global/portraits/5.jpg" alt="">
                          </span>
                          <span>Herman Beck</span>
                        </a>
                        <time datetime="2018-07-01T08:55">2 hours ago</time>
                      </small>
                    </li>
                    <li class="list-group-item justify-content-between">
                      <small class="badge badge-round badge-warning float-right">Pendening</small>
                      <p>
                        <span>Mobile App Problem</span>
                        <span>[13061]</span>
                      </p>
                      <small>Opened by
                        <a class="hightlight" href="javascript:void(0)">
                          <span class="avatar avatar-xs">
                            <img src="../../global/portraits/6.jpg" alt="">
                          </span>
                          <span>Mary Adams</span>
                        </a>
                        <time datetime="2018-07-01T07:55">1 hour ago</time>
                      </small>
                    </li>
                    <li class="list-group-item justify-content-between">
                      <small class="badge badge-round badge-primary float-right">In progress</small>
                      <p>
                        <span>IE8 problem</span>
                        <span>[13062]</span>
                      </p>
                      <small>Opened by
                        <a class="hightlight" href="javascript:void(0)">
                          <span class="avatar avatar-xs">
                            <img src="../../global/portraits/7.jpg" alt="">
                          </span>
                          <span>Caleb Richards</span>
                        </a>
                        <time datetime="2018-06-28T21:05">3 days ago</time>
                      </small>
                    </li>
                    <li class="list-group-item justify-content-between">
                      <small class="badge badge-round badge-danger float-right">Rejected</small>
                      <p>
                        <span>Respoonsive problem</span>
                        <span>[13063]</span>
                      </p>
                      <small>Opened by
                        <a class="hightlight" href="javascript:void(0)">
                          <span class="avatar avatar-xs">
                            <img src="../../global/portraits/8.jpg" alt="">
                          </span>
                          <span>June Lane</span>
                        </a>
                        <time datetime="2018-06-27T13:05">4 days ago</time>
                      </small>
                    </li>
                  </div>
                </div>
              </ul>
            </div>
          </div>
          <!-- End Panel Tickets -->
        </div>

        <div class="col-xl-4 col-lg-12">
          <!-- Panel Title -->
          <div class="card card-shadow" id="widgetGmap">
            <div class="map h-full" id="gmap"></div>
          </div>
          <!-- End Panel Title -->
        </div>
      </div>

      <!-- First Row -->
      <div class="col-xl-3 col-md-6 info-panel">
            <div class="card card-shadow">
              <div class="card-block bg-white p-20">
                <button type="button" class="btn btn-floating btn-sm btn-warning">
                  <i class="icon wb-shopping-cart"></i>
                </button>
                <span class="ml-15 font-weight-400">ORDERS</span>
                <div class="content-text text-center mb-0">
                  <i class="text-danger icon wb-triangle-up font-size-20">
                </i>
                  <span class="font-size-40 font-weight-100">399</span>
                  <p class="blue-grey-400 font-weight-100 m-0">+45% From previous month</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 info-panel">
            <div class="card card-shadow">
              <div class="card-block bg-white p-20">
                <button type="button" class="btn btn-floating btn-sm btn-danger">
                  <i class="icon fa-dollar"></i>
                </button>
                <span class="ml-15 font-weight-400">INCOM</span>
                <div class="content-text text-center mb-0">
                  <i class="text-success icon wb-triangle-down font-size-20">
                </i>
                  <span class="font-size-40 font-weight-100">$18,628</span>
                  <p class="blue-grey-400 font-weight-100 m-0">+45% From previous month</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 info-panel">
            <div class="card card-shadow">
              <div class="card-block bg-white p-20">
                <button type="button" class="btn btn-floating btn-sm btn-success">
                  <i class="icon wb-eye"></i>
                </button>
                <span class="ml-15 font-weight-400">VISITORS</span>
                <div class="content-text text-center mb-0">
                  <i class="text-danger icon wb-triangle-up font-size-20">
                </i>
                  <span class="font-size-40 font-weight-100">23,456</span>
                  <p class="blue-grey-400 font-weight-100 m-0">+25% From previous month</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 info-panel">
            <div class="card card-shadow">
              <div class="card-block bg-white p-20">
                <button type="button" class="btn btn-floating btn-sm btn-primary">
                  <i class="icon wb-user"></i>
                </button>
                <span class="ml-15 font-weight-400">CUSTOMERS</span>
                <div class="content-text text-center mb-0">
                  <i class="text-danger icon wb-triangle-up font-size-20">
                </i>
                  <span class="font-size-40 font-weight-100">4,367</span>
                  <p class="blue-grey-400 font-weight-100 m-0">+25% From previous month</p>
                </div>
              </div>
            </div>
          </div>
          <!-- End First Row -->


          <!-- second Row -->
        <div class="col-12" id="ecommerceChartView">
                <div class="card card-shadow">
                  <div class="card-header card-header-transparent py-20">
                    <div class="btn-group dropdown">
                      <a href="#" class="text-body dropdown-toggle blue-grey-700" data-toggle="dropdown">PRODUCTS SALES</a>
                      <div class="dropdown-menu animate" role="menu">
                        <a class="dropdown-item" href="#" role="menuitem">Sales</a>
                        <a class="dropdown-item" href="#" role="menuitem">Total sales</a>
                        <a class="dropdown-item" href="#" role="menuitem">profit</a>
                      </div>
                    </div>
                    <ul class="nav nav-pills nav-pills-rounded chart-action">
                      <li class="nav-item"><a class="active nav-link" data-toggle="tab" href="#scoreLineToDay">Day</a></li>
                      <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#scoreLineToWeek">Week</a></li>
                      <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#scoreLineToMonth">Month</a></li>
                    </ul>
                  </div>
                  <div class="widget-content tab-content bg-white p-20">
                    <div class="ct-chart tab-pane active" id="scoreLineToDay"></div>
                    <div class="ct-chart tab-pane" id="scoreLineToWeek"></div>
                    <div class="ct-chart tab-pane" id="scoreLineToMonth"></div>
                  </div>
                </div>
              </div>
              <!-- End Second Row -->
      
              <!-- Third Row -->
              <!-- Third Left -->
              <div class="col-lg-8" id="ecommerceRecentOrder">
                <div class="card card-shadow table-row">
                  <div class="card-header card-header-transparent py-20">
                    <div class="btn-group dropdown">
                      <a href="#" class="text-body dropdown-toggle blue-grey-700" data-toggle="dropdown">RECENT ORDER</a>
                      <div class="dropdown-menu animate" role="menu">
                        <a class="dropdown-item" href="#" role="menuitem">Sales</a>
                        <a class="dropdown-item" href="#" role="menuitem">Total sales</a>
                        <a class="dropdown-item" href="#" role="menuitem">profit</a>
                      </div>
                    </div>
                  </div>
                  <div class="card-block bg-white table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Image</th>
                          <th>Product</th>
                          <th>Customer</th>
                          <th>Purchased On</th>
                          <th>Status</th>
                          <th>Tracking No#</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <img src="../assets/examples/images/products/imac.png" alt="iMac"
                            />
                          </td>
                          <td>iMac</td>
                          <td>Russell</td>
                          <td>22/08/2018</td>
                          <td>
                            <span class="badge badge-success font-weight-100">Paid</span>
                          </td>
                          <td>#98BC85SD84</td>
                        </tr>
                        <tr>
                          <td>
                            <img src="../assets/examples/images/products/iphone.png" alt="iPhone"
                            />
                          </td>
                          <td>iPhone</td>
                          <td>Carol</td>
                          <td>15/07/2018</td>
                          <td>
                            <span class="badge badge-warning font-weight-100">Pending</span>
                          </td>
                          <td>#98SA3C9SC</td>
                        </tr>
                        <tr>
                          <td>
                            <img src="../assets/examples/images/products/applewatch.png"
                              alt="apple_watch" />
                          </td>
                          <td>apple Watch</td>
                          <td>Austin Pena</td>
                          <td>10/07/2018</td>
                          <td>
                            <span class="badge badge-success font-weight-100">Paid</span>
                          </td>
                          <td>#98BC85SD84</td>
                        </tr>
                        <tr>
                          <td>
                            <img src="../assets/examples/images/products/macmouse.png"
                              alt="mac_mouse" />
                          </td>
                          <td>mac Mouse</td>
                          <td>Randy</td>
                          <td>22/04/2018</td>
                          <td>
                            <span class="badge badge-default font-weight-100">Failed</span>
                          </td>
                          <td>#98SA3C9SC</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!-- End Third Left -->
      
              <!-- Third Right -->
              <div class="col-lg-4" id="ecommerceRevenue">
                <div class="card card-shadow text-center pt-10">
                  <h3 class="card-header card-header-transparent blue-grey-700 font-size-14 mt-0">REVENUE</h3>
                  <div class="card-block bg-white">
                    <div class="ct-chart barChart"></div>
                    <div class="pie-view row">
                      <div class="col-6 pie-left text-center">
                        <h5 class="blue-grey-500 font-size-14 font-weight-100">GROS REVENUE</h5>
                        <p class="font-size-20 blue-grey-700">
                          9,362,74
                        </p>
                        <div class="pie-progress pie-progress-sm" data-plugin="pieProgress" data-valuemax="100"
                          data-valuemin="0" data-barcolor="#a57afa" data-size="100" data-barsize="4"
                          data-goal="60" aria-valuenow="60" role="progressbar">
                          <span class="pie-progress-number">60%</span>
                        </div>
                      </div>
                      <div class="col-6 pie-right text-center">
                        <h5 class="blue-grey-500 font-size-14 font-weight-100">NET REVENUE</h5>
                        <p class="font-size-20 blue-grey-700">
                          6,734,58
                        </p>
                        <div class="pie-progress pie-progress-sm" data-plugin="pieProgress" data-valuemax="100"
                          data-valuemin="0" data-barcolor="#28c0de" data-size="100" data-barsize="4"
                          data-goal="78" aria-valuenow="78" role="progressbar">
                          <span class="pie-progress-number">78%</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Third Right -->
              <!-- End Third Row -->
      
    </div>
  </div>
  <!-- End Page -->
@endsection

@section('scripts')
<script src="{{ asset('assets/examples/js/forms/advanced.min599c.js?v4.0.2') }}"></script>
<script src="{{ asset('assets/examples/js/forms/advanced.min599c.js?v4.0.2') }}"></script>
<script src="{{ asset('global/js/Plugin/aspieprogress.min599c.js?v4.0.2') }}"></script>

{{--  plugins  --}}
<script src="{{ asset('global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.min599c.js?v4.0.2') }}"></script>
<script src="{{ asset('global/vendor/aspieprogress/jquery-asPieProgress.min599c.js?v4.0.2') }}"></script>
<script src="{{ asset('global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.min599c.js?v4.0.2') }}"></script>

@endsection