<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">


<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="nyabingi art gallery">
  <meta name="author" content="">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Nyabingi | Online art gallery</title>

  <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">
  <link rel="shortcut icon" href="assets/images/favicon.ico">

  <!-- Stylesheets -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('global/css/bootstrap.min599c.css?v4.0.2') }}">
  <link rel="stylesheet" href="{{ asset('global/css/bootstrap-extend.min599c.css?v4.0.2') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/site.min599c.css?v4.0.2') }}">

  <!-- Skin tools (demo site only) -->
  <link rel="stylesheet" href="{{ asset('global/css/skintools.min599c.css?v4.0.2') }}">
  <script src="{{ asset('assets/js/Plugin/skintools.min599c.js?v4.0.2') }}"></script>

  <!-- Plugins -->
  <link rel="stylesheet" href="{{ asset('global/vendor/animsition/animsition.min599c.css?v4.0.2') }}">
  <link rel="stylesheet" href="{{ asset('global/vendor/asscrollable/asScrollable.min599c.css?v4.0.2') }}">
  <link rel="stylesheet" href="{{ asset('global/vendor/switchery/switchery.min599c.css?v4.0.2') }}">
  <link rel="stylesheet" href="{{ asset('global/vendor/intro-js/introjs.min599c.css?v4.0.2') }}">
  <link rel="stylesheet" href="{{ asset('global/vendor/slidepanel/slidePanel.min599c.css?v4.0.2') }}">
  <link rel="stylesheet" href="{{ asset('global/vendor/flag-icon-css/flag-icon.min599c.css?v4.0.2') }}">

  <!-- Plugins For This Page -->
  <link rel="stylesheet" href="{{ asset('global/vendor/ladda/ladda.min599c.css?v4.0.2') }}">
  <link rel="stylesheet" href="{{ asset('global/vendor/aspieprogress/asPieProgress.min599c.css?v4.0.2') }}">
  {{--  modals  --}}
  <link rel="stylesheet" href="{{ asset('assets/examples/css/uikit/modals.min599c.css?v4.0.2') }}">

  {{--  advanced form elements begin  --}}
  <link rel="stylesheet" href="{{ asset('global/vendor/select2/select2.min599c.css?v4.0.2') }}">
  <link rel="stylesheet" href="{{ asset('global/vendor/bootstrap-tokenfield/bootstrap-tokenfield.min599c.css?v4.0.2') }}">
  <link rel="stylesheet" href="{{ asset('global/vendor/bootstrap-tagsinput/bootstrap-tagsinput.min599c.css?v4.0.2') }}">
  <link rel="stylesheet" href="{{ asset('global/vendor/bootstrap-select/bootstrap-select.min599c.css?v4.0.2') }}">
  <link rel="stylesheet" href="{{ asset('global/vendor/icheck/icheck.min599c.css?v4.0.2') }}">
  <link rel="stylesheet" href="{{ asset('global/vendor/switchery/switchery.min599c.css?v4.0.2') }}">
  {{--  <link rel="stylesheet" href="{{ asset('global/vendor/asrange/asRange.min599c.css?v4.0.2') }}">  --}}
  {{--  <link rel="stylesheet" href="{{ asset('global/vendor/ionrangeslider/ionrangeslider.min599c.css?v4.0.2') }}">  --}}
  <link rel="stylesheet" href="{{ asset('global/vendor/asspinner/asSpinner.min599c.css?v4.0.2') }}">
  {{--  <link rel="stylesheet" href="{{ asset('global/vendor/clockpicker/clockpicker.min599c.css?v4.0.2') }}">  --}}
  {{--  <link rel="stylesheet" href="{{ asset('global/vendor/ascolorpicker/asColorPicker.min599c.css?v4.0.2') }}">  --}}
  <link rel="stylesheet" href="{{ asset('global/vendor/bootstrap-touchspin/bootstrap-touchspin.min599c.css?v4.0.2') }}">
  <link rel="stylesheet" href="{{ asset('global/vendor/jquery-labelauty/jquery-labelauty.min599c.css?v4.0.2') }}">
  {{--  <link rel="stylesheet" href="{{ asset('global/vendor/bootstrap-datepicker/bootstrap-datepicker.min599c.css?v4.0.2') }}">  --}}
  <link rel="stylesheet" href="{{ asset('global/vendor/bootstrap-maxlength/bootstrap-maxlength.min599c.css?v4.0.2') }}">
  <link rel="stylesheet" href="{{ asset('global/vendor/timepicker/jquery-timepicker.min599c.css?v4.0.2') }}">
  <link rel="stylesheet" href="{{ asset('global/vendor/jquery-strength/jquery-strength.min599c.css?v4.0.2') }}">
  <link rel="stylesheet" href="{{ asset('global/vendor/multi-select/multi-select.min599c.css?v4.0.2') }}">
  <link rel="stylesheet" href="{{ asset('global/vendor/typeahead-js/typeahead.min599c.css?v4.0.2') }}">

  <link rel="stylesheet" href="{{ asset('assets/examples/css/forms/advanced.min599c.css?v4.0.2') }}">
  {{--  end advanced form elements  --}}

  {{--  gallery plugin  --}}
  <link rel="stylesheet" href="{{ asset('global/vendor/magnific-popup/magnific-popup.min599c.css?v4.0.2') }}">
  <link rel="stylesheet" href="{{ asset('assets/examples/css/pages/gallery.min599c.css?v4.0.2') }}">
  {{--  gallery plugin end  --}}

  <!-- Page -->
  <link rel="stylesheet" href="{{ asset('assets/examples/css/dashboard/v2.min599c.css?v4.0.2') }}">
  <link rel="stylesheet" href="{{ asset('assets/examples/css/uikit/buttons.min599c.css?v4.0.2') }}">
  {{--  form wizard  --}}
  <link rel="stylesheet" href="{{ asset('global/vendor/jquery-wizard/jquery-wizard.min599c.css?v4.0.2') }}">
  <link rel="stylesheet" href="{{ asset('global/vendor/formvalidation/formValidation.min599c.css?v4.0.2') }}">
  {{--  end form wizard  --}}
  {{--  profile styling  --}}
  <link rel="stylesheet" href="{{ asset('assets/examples/css/pages/profile.min599c.css?v4.0.2') }}">
  {{--  file upload plugins  --}}
  <link rel="stylesheet" href="{{ asset('global/vendor/blueimp-file-upload/jquery.fileupload.min599c.css?v4.0.2') }}">
  <link rel="stylesheet" href="{{ asset('global/vendor/dropify/dropify.min599c.css?v4.0.2') }}">
  {{--  end file upload plugin  --}}
    {{--  form layout  --}}
    <link rel="stylesheet" href="{{ asset('assets/examples/css/forms/layouts.min599c.css?v4.0.2') }}">

    {{--  user list  --}}
    <link rel="stylesheet" href="{{ asset('assets/examples/css/pages/user.min599c.css?v4.0.2') }}">
    {{--  end user list  --}}

      {{--  start alert  --}}
    <link rel="stylesheet" href="{{ asset('assets/examples/css/structure/alerts.min599c.css?v4.0.2') }}">
      {{--  end alert  --}}
  {{--  end page  --}}
    

  <!-- Fonts -->
  <link rel="stylesheet" href="{{ asset('global/fonts/web-icons/web-icons.min599c.css?v4.0.2') }}">
  <link rel="stylesheet" href="{{ asset('global/fonts/brand-icons/brand-icons.min599c.css?v4.0.2') }}">
  <link rel='stylesheet' href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic">

  <link rel="stylesheet" href="{{ asset('global/fonts/weather-icons/weather-icons.min599c.css?v4.0.2') }}">

  @yield('styles')

  <!--[if lt IE 9]>
    <script src="../global/vendor/html5shiv/html5shiv.min.js?v4.0.2"></script>
    <![endif]-->

  <!--[if lt IE 10]>
    <script src="../global/vendor/media-match/media.match.min.js?v4.0.2"></script>
    <script src="../global/vendor/respond/respond.min.js?v4.0.2"></script>
    <![endif]-->

  <!-- Scripts -->
  <script src="{{ asset('global/vendor/breakpoints/breakpoints.min599c.js?v4.0.2') }}"></script>
  <script>
     Breakpoints();
  </script>
</head>
<body class="animsition dashboard">
<div id="app">
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega navbar-expand-md"
    role="navigation">

    <div class="navbar-header">
      <button type="button" class="navbar-toggler hamburger hamburger-close navbar-toggler-left hided"
        data-toggle="menubar">
        <span class="sr-only">Toggle navigation</span>
        <span class="hamburger-bar"></span>
      </button>
      <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-collapse"
        data-toggle="collapse">
        <i class="icon wb-more-horizontal" aria-hidden="true"></i>
      </button>
      <div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu">
        <img class="navbar-brand-logo" src="../assets/images/logo.png" title="Remark">
        <span class="navbar-brand-text hidden-xs-down"> Nyabingi</span>
      </div>
      <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-search"
        data-toggle="collapse">
        <span class="sr-only">Toggle Search</span>
        <i class="icon wb-search" aria-hidden="true"></i>
      </button>

      

    </div>

    <div class="navbar-container container-fluid">
      <!-- Navbar Collapse -->
      <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
        <!-- Navbar Toolbar -->
        <ul class="nav navbar-toolbar">
          <li class="nav-item hidden-float" id="toggleMenubar">
            <a class="nav-link" data-toggle="menubar" href="#" role="button">
                <i class="icon hamburger hamburger-arrow-left">
                  <span class="sr-only">Toggle menubar</span>
                  <span class="hamburger-bar"></span>
                </i>
              </a>
          </li>
             
          {{--  <li class="nav-item hidden-sm-down" id="toggleFullscreen">
            <a class="nav-link icon icon-fullscreen" data-toggle="fullscreen" href="#" role="button">
              <span class="sr-only">Toggle fullscreen</span>
            </a>
          </li>  --}}
          <li class="nav-item hidden-float">
            <a class="nav-link icon wb-search" data-toggle="collapse" href="#" data-target="#site-navbar-search"
              role="button">
              <span class="sr-only">Toggle Search</span>
            </a>
          </li>
          <button type="button" class="nav-link" >
            <a  href="{{ route('portfolio.submit') }}" role="button">
                <span>Upload Artwork</span>
            </a>
            {{--  <span class="sr-only">Toggle Search</span>  --}}
            <i class="icon wb-upload" aria-hidden="true"></i>
          </button>

          

          {{--  <li class="nav-item hidden-sm-down" >
              <a class="nav-link " href="{{ route('shop.index') }}" role="button">
                  <span>Shop</span>
              </a>
          </li>  --}}
          <li class="nav-item dropdown dropdown-fw dropdown-mega">
            <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false" data-animation="fade"
              role="button">Menu <i class="icon wb-chevron-down-mini" aria-hidden="true"></i></a>
            <div class="dropdown-menu" role="menu">
              <div class="mega-content">
                <div class="row">
                  <div class="col-md-4">
                    <h5>UI Kit</h5>
                    <ul class="blocks-2">
                      <li class="mega-menu m-0">
                        <ul class="list-icons">
                          <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                            <a
                              href="{{route('filter','drawings')}}">Drawings</a>
                          </li>
                          <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                            <a
                              href="{{route('filter','paintings')}}">Paintings</a>
                          </li>
                          <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                            <a
                              href="{{route('filter','photography')}}">Photography</a>
                          </li>
                          <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                            <a
                              href="{{route('filter','digital')}}">Digital art</a>
                          </li>
                          <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                            <a
                              href="{{route('filter','portrait')}}">Portraits</a>
                          </li>
                          <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                            <a
                              href="{{route('filter','stock')}}">Stock Images</a>
                          </li>
                        </ul>
                      </li>
                      <li class="mega-menu m-0">
                        <ul class="list-icons">
                          <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                            <a
                              href="{{route('filter','animation')}}">Animations</a>
                          </li>
                          <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                            <a
                              href="{{route('filter','sculpture')}}">Sculptures</a>
                          </li>
                          <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                            <a
                              href="{{route('filter','mural')}}">Murals</a>
                          </li>
                          <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                            <a
                              href="{{route('filter','street')}}">Street art</a>
                          </li>
                          <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                            <a
                              href="{{route('filter','wood')}}">Wood art</a>
                          </li>
                          <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                            <a
                              href="{{route('filter','poster')}}">Posters</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                  {{--  <div class="col-md-4">
                    <h5>Media
                      <span class="badge badge-pill badge-success">4</span>
                    </h5>
                    <ul class="blocks-3">
                      <li>
                        <a class="thumbnail m-0" href="javascript:void(0)">
                          <img class="w-full" src="../../global/photos/view-1-150x100.jpg" alt="..." />
                        </a>
                      </li>
                      <li>
                        <a class="thumbnail m-0" href="javascript:void(0)">
                          <img class="w-full" src="../../global/photos/view-2-150x100.jpg" alt="..." />
                        </a>
                      </li>
                      <li>
                        <a class="thumbnail m-0" href="javascript:void(0)">
                          <img class="w-full" src="../../global/photos/view-3-150x100.jpg" alt="..." />
                        </a>
                      </li>
                      <li>
                        <a class="thumbnail m-0" href="javascript:void(0)">
                          <img class="w-full" src="../../global/photos/view-4-150x100.jpg" alt="..." />
                        </a>
                      </li>
                      <li>
                        <a class="thumbnail m-0" href="javascript:void(0)">
                          <img class="w-full" src="../../global/photos/view-5-150x100.jpg" alt="..." />
                        </a>
                      </li>
                      <li>
                        <a class="thumbnail m-0" href="javascript:void(0)">
                          <img class="w-full" src="../../global/photos/view-6-150x100.jpg" alt="..." />
                        </a>
                      </li>
                    </ul>
                  </div>  --}}
                  {{--  <div class="col-md-4">
                    <h5 class="mb-0">Accordion</h5>
                    <!-- Accordion -->
                    <div class="panel-group panel-group-simple" id="siteMegaAccordion" aria-multiselectable="true"
                      role="tablist">
                      <div class="panel">
                        <div class="panel-heading" id="siteMegaAccordionHeadingOne" role="tab">
                          <a class="panel-title" data-toggle="collapse" href="#siteMegaCollapseOne" data-parent="#siteMegaAccordion"
                            aria-expanded="false" aria-controls="siteMegaCollapseOne">
                              Collapsible Group Item #1
                            </a>
                        </div>
                        <div class="panel-collapse collapse" id="siteMegaCollapseOne" aria-labelledby="siteMegaAccordionHeadingOne"
                          role="tabpanel">
                          <div class="panel-body">
                            De moveat laudatur vestra parum doloribus labitur sentire partes, eripuit praesenti
                            congressus ostendit alienae, voluptati ornateque accusamus
                            clamat reperietur convicia albucius.
                          </div>
                        </div>
                      </div>
                      <div class="panel">
                        <div class="panel-heading" id="siteMegaAccordionHeadingTwo" role="tab">
                          <a class="panel-title collapsed" data-toggle="collapse" href="#siteMegaCollapseTwo"
                            data-parent="#siteMegaAccordion" aria-expanded="false"
                            aria-controls="siteMegaCollapseTwo">
                              Collapsible Group Item #2
                            </a>
                        </div>
                        <div class="panel-collapse collapse" id="siteMegaCollapseTwo" aria-labelledby="siteMegaAccordionHeadingTwo"
                          role="tabpanel">
                          <div class="panel-body">
                            Praestabiliorem. Pellat excruciant legantur ullum leniter vacare foris voluptate
                            loco ignavi, credo videretur multoque choro fatemur
                            mortis animus adoptionem, bello statuat expediunt naturales.
                          </div>
                        </div>
                      </div>

                      <div class="panel">
                        <div class="panel-heading" id="siteMegaAccordionHeadingThree" role="tab">
                          <a class="panel-title collapsed" data-toggle="collapse" href="#siteMegaCollapseThree"
                            data-parent="#siteMegaAccordion" aria-expanded="false"
                            aria-controls="siteMegaCollapseThree">
                              Collapsible Group Item #3
                            </a>
                        </div>
                        <div class="panel-collapse collapse" id="siteMegaCollapseThree" aria-labelledby="siteMegaAccordionHeadingThree"
                          role="tabpanel">
                          <div class="panel-body">
                            Horum, antiquitate perciperet d conspectum locus obruamus animumque perspici probabis
                            suscipere. Desiderat magnum, contenta poena desiderant
                            concederetur menandri damna disputandum corporum.
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Accordion -->
                  </div>  --}}
                </div>
              </div>
            </div>
          </li>
        </ul>
        <!-- End Navbar Toolbar -->

        <!-- Navbar Toolbar Right -->
        <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
            @guest
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
            @endguest
            @if(Auth::check())
          <li class="nav-item dropdown">
            <a class="nav-link navbar-avatar" data-toggle="dropdown" href="#" aria-expanded="false"
              data-animation="scale-up" role="button">
              <span class="avatar avatar-online">
                <img src="{{Auth::user()->avatar}}" alt="...">
                <i></i>
              </span>
            </a>
            <div class="dropdown-menu" role="menu">
                    
              <a class="dropdown-item" href="{{ route('profile',['id' => Auth::id() ]) }}" role="menuitem"><i class="icon wb-user" aria-hidden="true"></i> Profile</a>
              <a class="dropdown-item" href="{{ route('profile',['id' => Auth::id() ]) }}" role="menuitem"><i class="icon wb-payment" aria-hidden="true"></i> Orders</a>
              @if(Auth::user()->user_level == 'founder')
                <a class="dropdown-item" href="{{ route('founder.dashboard') }}" role="menuitem"><i class="icon wb-star" aria-hidden="true"></i> Founder dashboard </a>
              @endif
              <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-settings" aria-hidden="true"></i> Settings</a>
              <div class="dropdown-divider" role="presentation"></div>
              
                <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" role="menuitem">
                        <i class="icon wb-power" aria-hidden="true"></i> Logout
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                    </a>
               
            </div>
          </li>
            @endif
         <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="javascript:void(0)" title="Notifications"
              aria-expanded="false" data-animation="scale-up" role="button">
                <i class="icon wb-bell" aria-hidden="true"></i>
                <span class="badge badge-pill badge-danger up">5</span>
              </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">
              <div class="dropdown-menu-header">
                <h5>NOTIFICATIONS</h5>
                <span class="badge badge-round badge-danger">New 5</span>
              </div>

              <div class="list-group">
                <div data-role="container">
                  <div data-role="content">
                    <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="pr-10">
                          <i class="icon wb-order bg-red-600 white icon-circle" aria-hidden="true"></i>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">A new order has been placed</h6>
                          <time class="media-meta" datetime="2018-06-12T20:50:48+08:00">5 hours ago</time>
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="pr-10">
                          <i class="icon wb-user bg-green-600 white icon-circle" aria-hidden="true"></i>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">Completed the task</h6>
                          <time class="media-meta" datetime="2018-06-11T18:29:20+08:00">2 days ago</time>
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="pr-10">
                          <i class="icon wb-settings bg-red-600 white icon-circle" aria-hidden="true"></i>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">Settings updated</h6>
                          <time class="media-meta" datetime="2018-06-11T14:05:00+08:00">2 days ago</time>
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="pr-10">
                          <i class="icon wb-calendar bg-blue-600 white icon-circle" aria-hidden="true"></i>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">Event started</h6>
                          <time class="media-meta" datetime="2018-06-10T13:50:18+08:00">3 days ago</time>
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="pr-10">
                          <i class="icon wb-chat bg-orange-600 white icon-circle" aria-hidden="true"></i>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">Message received</h6>
                          <time class="media-meta" datetime="2018-06-10T12:34:48+08:00">3 days ago</time>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
              <div class="dropdown-menu-footer">
                <a class="dropdown-menu-footer-btn" href="javascript:void(0)" role="button">
                    <i class="icon wb-settings" aria-hidden="true"></i>
                  </a>
                <a class="dropdown-item" href=" {{route('notifications')}} " role="menuitem">
                    All notifications
                  </a>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="{{ route('product.shoppingCart') }}" title="Messages"
              aria-expanded="false" data-animation="scale-up" role="button">
                <i class="icon wb-shopping-cart" aria-hidden="true"></i>
                <span class="badge badge-pill badge-info up">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span>
              </a>
          </li>
          <li class="nav-item" id="toggleChat">
            <a class="nav-link" data-toggle="site-sidebar" href="javascript:void(0)" title="Chat"
              data-url="../site-sidebar.tpl">
                <i class="icon wb-chat" aria-hidden="true"></i>
              </a>
          </li>
        </ul>
        <!-- End Navbar Toolbar Right -->
      </div>
      <!-- End Navbar Collapse -->

      <!-- Site Navbar Seach -->
      <div class="collapse navbar-search-overlap" id="site-navbar-search">
        <form role="search" action="{{ route('search') }}" method="POST" enctype="multipart/form-data">
          {{csrf_field()}}
          <div class="form-group">
            <div class="input-search">
              <i class="input-search-icon wb-search" aria-hidden="true"></i>
              <input type="text" class="form-control" name="key" placeholder="Search...">
              <button type="submit" class="input-search-close icon wb-close" data-target="#site-navbar-search"
                data-toggle="collapse" aria-label="Close"></button>
            </div>
          </div>
        </form>
      </div>
      <!-- End Site Navbar Seach -->
    </div>
  </nav>

  
 
  <div class="site-menubar">
        <div class="site-menubar-body">
          <div>
            <div>
              <ul class="site-menu" data-plugin="menu">
                <li class="site-menu-category">General</li>
                <li class="site-menu-item has-sub active open">
                  <a href="{{ route('home') }}">
                      <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
                      <span class="site-menu-title">Home</span>
                          
                  </a>
                  
                </li>

                <li class="site-menu-item has-sub active open">
                  <a href="{{ route('shop.index') }}">
                      <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
                      <span class="site-menu-title">Shop</span>
                          
                  </a>
                  
                </li>
               
                
                
                
                <li class="site-menu-category">Explore</li>
                <li class="site-menu-item has-sub active open">
                        <a href="{{ route('explore.artists') }}">
                                          <i class="site-menu-icon wb-world" aria-hidden="true"></i>
                                          <span class="site-menu-title">Artists</span>
                                              
                                      </a>
                        
                      </li>
                {{--  <li class="site-menu-item has-sub">
                  <a href="javascript:void(0)">
                                    <i class="site-menu-icon wb-grid-4" aria-hidden="true"></i>
                                    <span class="site-menu-title">Apps</span>
                                            <span class="site-menu-arrow"></span>
                                </a>
                  <ul class="site-menu-sub">
                    <li class="site-menu-item">
                      <a href="../apps/contacts/contacts.html">
                        <span class="site-menu-title">Contacts</span>
                      </a>
                    </li>
                    <li class="site-menu-item">
                      <a href="../apps/calendar/calendar.html">
                        <span class="site-menu-title">Calendar</span>
                      </a>
                    </li>
                    <li class="site-menu-item">
                      <a href="../apps/notebook/notebook.html">
                        <span class="site-menu-title">Notebook</span>
                      </a>
                    </li>
                    <li class="site-menu-item">
                      <a href="../apps/taskboard/taskboard.html">
                        <span class="site-menu-title">Taskboard</span>
                      </a>
                    </li>
                    <li class="site-menu-item has-sub">
                      <a href="javascript:void(0)">
                        <span class="site-menu-title">Documents</span>
                        <span class="site-menu-arrow"></span>
                      </a>
                      <ul class="site-menu-sub">
                        <li class="site-menu-item">
                          <a href="../apps/documents/articles.html">
                            <span class="site-menu-title">Articles</span>
                          </a>
                        </li>
                        <li class="site-menu-item">
                          <a href="../apps/documents/categories.html">
                            <span class="site-menu-title">Categories</span>
                          </a>
                        </li>
                        <li class="site-menu-item">
                          <a href="../apps/documents/article.html">
                            <span class="site-menu-title">Article</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="site-menu-item">
                      <a href="../apps/forum/forum.html">
                        <span class="site-menu-title">Forum</span>
                      </a>
                    </li>
                    <li class="site-menu-item">
                      <a href="../apps/message/message.html">
                        <span class="site-menu-title">Message</span>
                      </a>
                    </li>
                    <li class="site-menu-item">
                      <a href="../apps/projects/projects.html">
                        <span class="site-menu-title">Projects</span>
                      </a>
                    </li>
                    <li class="site-menu-item">
                      <a href="../apps/mailbox/mailbox.html">
                        <span class="site-menu-title">Mailbox</span>
                      </a>
                    </li>
                    <li class="site-menu-item">
                      <a href="../apps/media/overview.html">
                        <span class="site-menu-title">Media</span>
                      </a>
                    </li>
                    <li class="site-menu-item">
                      <a href="../apps/work/work.html">
                        <span class="site-menu-title">Work</span>
                      </a>
                    </li>
                    <li class="site-menu-item">
                      <a href="../apps/location/location.html">
                        <span class="site-menu-title">Location</span>
                      </a>
                    </li>
                    <li class="site-menu-item">
                      <a href="../apps/travel/travel.html">
                        <span class="site-menu-title">Travel</span>
                        <div class="site-menu-label">
                          <span class="badge badge-info badge-round">new</span>
                        </div>
                      </a>
                    </li>
                  </ul>
                </li>  --}}
              </ul>
    
              
            </div>
          </div>
        </div>
    
        <div class="site-menubar-footer">
          {{--  <a href="javascript: void(0);" class="fold-show" data-placement="top" data-toggle="tooltip"
            data-original-title="Settings">
            <span class="icon wb-settings" aria-hidden="true"></span>
          </a>
          <a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Lock">
            <span class="icon wb-eye-close" aria-hidden="true"></span>
          </a>
          <a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Logout">
            <span class="icon wb-power" aria-hidden="true"></span>
          </a>  --}}
        </div>
      </div>





      <div class="site-gridmenu">
            <div>
              <div>
                <ul>
                  <li>
                    <a href="../apps/mailbox/mailbox.html">
                        <i class="icon wb-envelope"></i>
                        <span>Mailbox</span>
                      </a>
                  </li>
                 
                  
                </ul>
              </div>
            </div>
          </div>
        
    
          <!-- Page -->
           {{--  page content goes here  --}}
           <div class="alert alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <strong>Warning!</strong> Best check yo self, you're not looking too good.
            </div>

            @yield('content')
  
          <!-- End Page -->
        
          <script src="https://maps.google.com/maps/api/js?sensor=false"></script>
        
        
          <!-- Footer -->
          <footer class="site-footer">
            <div class="site-footer-legal">© 2018 <a href="#">Nyabingi</a></div>
            <div class="site-footer-right">
              Crafted with <i class="red-600 wb wb-heart"></i> by <a href="#">Black Magik Creative Agency</a>
            </div>
          </footer>
</div>

  <!-- Core  -->
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('global/vendor/babel-external-helpers/babel-external-helpers599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('global/vendor/jquery/jquery.min599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('global/vendor/popper-js/umd/popper.min599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('global/vendor/bootstrap/bootstrap.min599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('global/vendor/animsition/animsition.min599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('global/vendor/mousewheel/jquery.mousewheel599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('global/vendor/asscrollbar/jquery-asScrollbar.min599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('global/vendor/asscrollable/jquery-asScrollable.min599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('global/vendor/ashoverscroll/jquery-asHoverScroll.min599c.js?v4.0.2') }}"></script>

    @yield('scripts')
  <!-- Plugins -->
  <script src="{{ asset('global/vendor/switchery/switchery.min599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('global/vendor/intro-js/intro.min599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('global/vendor/screenfull/screenfull599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('global/vendor/slidepanel/jquery-slidePanel.min599c.js?v4.0.2') }}"></script>

  <!-- Plugins For This Page -->
  {{--  <script src="{{ asset('global/vendor/skycons/skycons599c.js?v4.0.2') }}"></script>  --}}
  {{--  <script src="{{ asset('global/vendor/chartist/chartist.min599c.js?v4.0.2') }}"></script>  --}}
  {{--  <script src="{{ asset('global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.min599c.js?v4.0.2') }}"></script>  --}}
  {{--  <script src="{{ asset('global/vendor/aspieprogress/jquery-asPieProgress.min599c.js?v4.0.2') }}"></script>  --}}
  {{--  <script src="{{ asset('js/app.js') }}../global/vendor/jvectormap/jquery-jvectormap.min599c.js?v4.0.2"></script>  --}}
  <script src="{{ asset('global/vendor/jvectormap/maps/jquery-jvectormap-au-mill-en599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('global/vendor/matchheight/jquery.matchHeight-min599c.js?v4.0.2') }}"></script>
  {{--  begin file upload plugin  --}}
  <script src="{{ asset('global/vendor/jquery-ui/jquery-ui.min599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('global/vendor/blueimp-tmpl/tmpl.min599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('global/vendor/blueimp-canvas-to-blob/canvas-to-blob.min599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('global/vendor/blueimp-load-image/load-image.all.min599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('global/vendor/blueimp-file-upload/jquery.fileupload599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('global/vendor/blueimp-file-upload/jquery.fileupload-process599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('global/vendor/blueimp-file-upload/jquery.fileupload-image599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('global/vendor/blueimp-file-upload/jquery.fileupload-audio599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('global/vendor/blueimp-file-upload/jquery.fileupload-video599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('global/vendor/blueimp-file-upload/jquery.fileupload-validate599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('global/vendor/blueimp-file-upload/jquery.fileupload-ui599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('global/vendor/dropify/dropify.min599c.js?v4.0.2') }}"></script>
    {{--  end file upload plugin  --}}
    {{--  begin form wizard plugin  --}}
    <script src="{{ asset('global/vendor/formvalidation/formValidation.min599c.js?v4.0.2') }}"></script>
    <script src="{{ asset('global/vendor/formvalidation/framework/bootstrap.min599c.js?v4.0.2') }}"></script>
    <script src="{{ asset('global/vendor/jquery-wizard/jquery-wizard.min599c.js?v4.0.2') }}"></script>
    {{--  end form wizard plugins  --}}

    {{--  buttons  --}}
    <script src="{{ asset('global/vendor/ladda/spin.min599c.js?v4.0.2') }}"></script>
    <script src="{{ asset('global/vendor/ladda/ladda.min599c.js?v4.0.2') }}"></script>
    {{--  end buttons  --}}

    {{--  advanced input  --}}
    <script src="{{ asset('global/vendor/select2/select2.full.min599c.js?v4.0.2') }}"></script>
    <script src="{{ asset('global/vendor/bootstrap-tokenfield/bootstrap-tokenfield.min599c.js?v4.0.2') }}"></script>
    <script src="{{ asset('global/vendor/bootstrap-tagsinput/bootstrap-tagsinput.min599c.js?v4.0.2') }}"></script>
    <script src="{{ asset('global/vendor/bootstrap-select/bootstrap-select.min599c.js?v4.0.2') }}"></script>
    <script src="{{ asset('global/vendor/icheck/icheck.min599c.js?v4.0.2') }}"></script>
    <script src="{{ asset('global/vendor/switchery/switchery.min599c.js?v4.0.2') }}"></script>
    <script src="{{ asset('global/vendor/asrange/jquery-asRange.min599c.js?v4.0.2') }}"></script>
    <script src="{{ asset('global/vendor/ionrangeslider/ion.rangeSlider.min599c.js?v4.0.2') }}"></script>
    <script src="{{ asset('global/vendor/asspinner/jquery-asSpinner.min599c.js?v4.0.2') }}"></script>
    <script src="{{ asset('global/vendor/clockpicker/bootstrap-clockpicker.min599c.js?v4.0.2') }}"></script>
    <script src="{{ asset('global/vendor/ascolor/jquery-asColor.min599c.js?v4.0.2') }}"></script>
    <script src="{{ asset('global/vendor/asgradient/jquery-asGradient.min599c.js?v4.0.2') }}"></script>
    <script src="{{ asset('global/vendor/ascolorpicker/jquery-asColorPicker.min599c.js?v4.0.2') }}"></script>
    <script src="{{ asset('global/vendor/bootstrap-maxlength/bootstrap-maxlength.min599c.js?v4.0.2') }}"></script>
    <script src="{{ asset('global/vendor/jquery-knob/jquery.knob.min599c.js?v4.0.2') }}"></script>
    <script src="{{ asset('global/vendor/bootstrap-touchspin/bootstrap-touchspin.min599c.js?v4.0.2') }}"></script>
    <script src="{{ asset('global/vendor/jquery-labelauty/jquery-labelauty599c.js?v4.0.2') }}"></script>
    <script src="{{ asset('global/vendor/bootstrap-datepicker/bootstrap-datepicker.min599c.js?v4.0.2') }}"></script>
    <script src="{{ asset('global/vendor/timepicker/jquery.timepicker.min599c.js?v4.0.2') }}"></script>
    <script src="{{ asset('global/vendor/datepair/datepair.min599c.js?v4.0.2') }}"></script>
    <script src="{{ asset('global/vendor/datepair/jquery.datepair.min599c.js?v4.0.2') }}"></script>
    <script src="{{ asset('global/vendor/jquery-strength/password_strength599c.js?v4.0.2') }}"></script>
    <script src="{{ asset('global/vendor/jquery-strength/jquery-strength.min599c.js?v4.0.2') }}"></script>
    <script src="{{ asset('global/vendor/multi-select/jquery.multi-select599c.js?v4.0.2') }}"></script>
    <script src="{{ asset('global/vendor/typeahead-js/bloodhound.min599c.js?v4.0.2') }}"></script>
    <script src="{{ asset('global/vendor/typeahead-js/typeahead.jquery.min599c.js?v4.0.2') }}"></script>
    <script src="{{ asset('global/vendor/jquery-placeholder/jquery.placeholder599c.js?v4.0.2') }}"></script>
    {{--  advanced input end  --}}

  {{--  end plugins for this page  --}}

  <!-- Scripts -->
  <script src="{{ asset('global/js/Component.min599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('global/js/Plugin.min599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('global/js/Base.min599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('global/js/Config.min599c.js?v4.0.2') }}"></script>

  <script src="{{ asset('assets/js/Section/Menubar.min599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('assets/js/Section/GridMenu.min599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('assets/js/Section/Sidebar.min599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('assets/js/Section/PageAside.min599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('assets/js/Plugin/menu.min599c.js?v4.0.2') }}"></script>

  <!-- Config -->
  <script src="{{ asset('global/js/config/colors.min599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('assets/js/config/tour.min599c.js?v4.0.2') }}"></script>
  <script>
    Config.set('assets', 'assets');
  </script>

  <!-- Page -->
  <script src="{{ asset('assets/js/Site.min599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('global/js/Plugin/asscrollable.min599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('global/js/Plugin/slidepanel.min599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('global/js/Plugin/switchery.min599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('global/js/Plugin/matchheight.min599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('global/js/Plugin/jvectormap.min599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('assets/examples/js/dashboard/v2.min599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('global/js/Plugin/jquery-placeholder.min599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('global/vendor/jquery-placeholder/jquery.placeholder599c.js?v4.0.2') }}"></script>


  {{--  profile scripts  --}}
  <script src="{{ asset('global/js/Plugin/tabs.min599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('global/js/Plugin/responsive-tabs.min599c.js?v4.0.2') }}"></script>
  {{--  end profile  --}}
  {{--  begin file upload  --}}
  <script src="{{ asset('global/js/Plugin/dropify.min599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('assets/examples/js/forms/uploads.min599c.js?v4.0.2') }}"></script>
  {{--  end file upload  --}}

  {{--  form wizard begin  --}}
  <script src="{{ asset('assets/examples/js/forms/wizard.min599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('global/js/Plugin/jquery-wizard.min599c.js?v4.0.2') }}"></script>
  {{--  form wizard end  --}}

  {{--  buttons  --}}
  <script src="{{ asset('global/js/Plugin/loading-button.min599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('global/js/Plugin/more-button.min599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('global/js/Plugin/ladda.min599c.js?v4.0.2') }}"></script>
  {{--  end buttons  --}}

  {{--  advanced buttons  --}}
  
  <script src="{{ asset('global/js/Plugin/select2.min599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('global/js/Plugin/bootstrap-tokenfield.min599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('global/js/Plugin/bootstrap-tagsinput.min599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('global/js/Plugin/bootstrap-select.min599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('global/js/Plugin/icheck.min599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('global/js/Plugin/switchery.min599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('global/js/Plugin/asrange.min599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('global/js/Plugin/ionrangeslider.min599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('global/js/Plugin/asspinner.min599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('global/js/Plugin/clockpicker.min599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('global/js/Plugin/ascolorpicker.min599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('global/js/Plugin/bootstrap-maxlength.min599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('global/js/Plugin/jquery-knob.min599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('global/js/Plugin/bootstrap-touchspin.min599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('global/js/Plugin/card.min599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('global/js/Plugin/jquery-labelauty.min599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('global/js/Plugin/bootstrap-datepicker.min599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('global/js/Plugin/jt-timepicker.min599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('global/js/Plugin/datepair.min599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('global/js/Plugin/jquery-strength.min599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('global/js/Plugin/multi-select.min599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('global/js/Plugin/jquery-placeholder.min599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('assets/examples/js/forms/advanced.min599c.js?v4.0.2') }}"></script>
  {{--  end advanced buttons  --}}

  {{--  gallery start  --}}
  <script src="{{ asset('assets/examples/js/pages/gallery.min599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('global/js/Plugin/filterable.min599c.js?v4.0.2') }}"></script>
  {{--  plugins  --}}
  <script src="{{ asset('global/vendor/isotope/isotope.pkgd.min599c.js?v4.0.2') }}"></script>
  <script src="{{ asset('global/vendor/magnific-popup/jquery.magnific-popup.min599c.js?v4.0.2') }}"></script>
  {{--  gallery end  --}}

  {{--  disable context menu  --}}
  <script>
      $('img').mousedown(function (e) {
        if(e.button == 2) { // right click
          return false; // do nothing!
        }
      }
  </script>
  {{--  end page  --}}
  @yield('scripts')
  <script>
        (function(document, window, $) {
          'use strict';
    
          var Site = window.Site;
          $(document).ready(function() {
            Site.run();
          });
        })(document, window, jQuery);
      </script>
  {{--  end profile scripts  --}}

  <!-- Google Analytics -->
  <script>
        (function(i, s, o, g, r, a, m) {
          i['GoogleAnalyticsObject'] = r;
          i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
          }, i[r].l = 1 * new Date();
          a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
          a.async = 1;
          a.src = g;
          m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '../../../../www.google-analytics.com/analytics.js',
          'ga');
    
        ga('create', 'UA-65522665-1', 'auto');
        ga('send', 'pageview');
      </script>
</body>



</html>
