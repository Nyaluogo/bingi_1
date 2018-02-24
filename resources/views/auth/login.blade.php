<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">

<!-- Mirrored from getbootstrapadmin.com/remark/base/pages/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 Jan 2018 16:06:43 GMT -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">

  <title>Login | Nyabingi Art Gallery</title>

  <link rel="apple-touch-icon" href="../assets/images/apple-touch-icon.png">
  <link rel="shortcut icon" href="../assets/images/favicon.ico">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="../../global/css/bootstrap.min599c.css?v4.0.2">
  <link rel="stylesheet" href="../../global/css/bootstrap-extend.min599c.css?v4.0.2">
  <link rel="stylesheet" href="../assets/css/site.min599c.css?v4.0.2">

  <!-- Skin tools (demo site only) -->
  <link rel="stylesheet" href="../../global/css/skintools.min599c.css?v4.0.2">
  <script src="../assets/js/Plugin/skintools.min599c.js?v4.0.2"></script>

  <!-- Plugins -->
  <link rel="stylesheet" href="../../global/vendor/animsition/animsition.min599c.css?v4.0.2">
  <link rel="stylesheet" href="../../global/vendor/asscrollable/asScrollable.min599c.css?v4.0.2">
  <link rel="stylesheet" href="../../global/vendor/switchery/switchery.min599c.css?v4.0.2">
  <link rel="stylesheet" href="../../global/vendor/intro-js/introjs.min599c.css?v4.0.2">
  <link rel="stylesheet" href="../../global/vendor/slidepanel/slidePanel.min599c.css?v4.0.2">
  <link rel="stylesheet" href="../../global/vendor/flag-icon-css/flag-icon.min599c.css?v4.0.2">

  <!-- Page -->
  <link rel="stylesheet" href="../assets/examples/css/pages/login.min599c.css?v4.0.2">

  <!-- Fonts -->
  <link rel="stylesheet" href="../../global/fonts/web-icons/web-icons.min599c.css?v4.0.2">
  <link rel="stylesheet" href="../../global/fonts/brand-icons/brand-icons.min599c.css?v4.0.2">
  <link rel='stylesheet' href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic">


  <!--[if lt IE 9]>
    <script src="../../global/vendor/html5shiv/html5shiv.min.js?v4.0.2"></script>
    <![endif]-->

  <!--[if lt IE 10]>
    <script src="../../global/vendor/media-match/media.match.min.js?v4.0.2"></script>
    <script src="../../global/vendor/respond/respond.min.js?v4.0.2"></script>
    <![endif]-->

  <!-- Scripts -->
  <script src="../../global/vendor/breakpoints/breakpoints.min599c.js?v4.0.2"></script>
  <script>
    Breakpoints();
  </script>
</head>
<body class="animsition page-login layout-full page-dark">
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->


  <!-- Page -->
  <div class="page vertical-align text-center" data-animsition-in="fade-in" data-animsition-out="fade-out">>
    <div class="page-content vertical-align-middle animation-slide-top animation-duration-1">
      <div class="brand">
        <img class="brand-img" src="../assets/images/logo.png" alt="...">
        <h2 class="brand-text">Nyabingi</h2>
      </div>
      <p>Sign into your account</p>
      <form method="post" action="{{ route('login') }}">
            {{ csrf_field() }}
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label class="sr-only" for="inputEmail">Email</label>

              
                    <input id="inputEmail" type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                

                
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="inputPassword" class="sr-only">Password</label>

                    
                    <input id="inputPassword" type="password" class="form-control" name="password" placeholder="Password" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                
            </div>

            
       
        
        <div class="form-group clearfix">
          <div class="checkbox-custom checkbox-inline checkbox-primary float-left">
            <input type="checkbox" id="inputCheckbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
            <label for="inputCheckbox">Remember me</label>
          </div>
          <a class="float-right" href="{{ route('password.request') }}">Forgot password?</a>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Sign in</button>
      </form>
      <p>Still no account? Please go to <a href="{{route('register')}}">Register</a></p>

      <footer class="page-copyright page-copyright-inverse">
        <p>WEBSITE BY Black Magik Studio</p>
        <p>© 2018. All RIGHT RESERVED.</p>
        <div class="social">
          <a class="btn btn-icon btn-pure" href="javascript:void(0)">
          <i class="icon bd-twitter" aria-hidden="true"></i>
        </a>
          <a class="btn btn-icon btn-pure" href="javascript:void(0)">
          <i class="icon bd-facebook" aria-hidden="true"></i>
        </a>
          <a class="btn btn-icon btn-pure" href="javascript:void(0)">
          <i class="icon bd-dribbble" aria-hidden="true"></i>
        </a>
        </div>
      </footer>
    </div>
  </div>
  <!-- End Page -->


  <!-- Core  -->
  <script src="../../global/vendor/babel-external-helpers/babel-external-helpers599c.js?v4.0.2"></script>
  <script src="../../global/vendor/jquery/jquery.min599c.js?v4.0.2"></script>
  <script src="../../global/vendor/popper-js/umd/popper.min599c.js?v4.0.2"></script>
  <script src="../../global/vendor/bootstrap/bootstrap.min599c.js?v4.0.2"></script>
  <script src="../../global/vendor/animsition/animsition.min599c.js?v4.0.2"></script>
  <script src="../../global/vendor/mousewheel/jquery.mousewheel599c.js?v4.0.2"></script>
  <script src="../../global/vendor/asscrollbar/jquery-asScrollbar.min599c.js?v4.0.2"></script>
  <script src="../../global/vendor/asscrollable/jquery-asScrollable.min599c.js?v4.0.2"></script>
  <script src="../../global/vendor/ashoverscroll/jquery-asHoverScroll.min599c.js?v4.0.2"></script>

  <!-- Plugins -->
  <script src="../../global/vendor/switchery/switchery.min599c.js?v4.0.2"></script>
  <script src="../../global/vendor/intro-js/intro.min599c.js?v4.0.2"></script>
  <script src="../../global/vendor/screenfull/screenfull599c.js?v4.0.2"></script>
  <script src="../../global/vendor/slidepanel/jquery-slidePanel.min599c.js?v4.0.2"></script>

  <!-- Plugins For This Page -->
  <script src="../../global/vendor/jquery-placeholder/jquery.placeholder599c.js?v4.0.2"></script>

  <!-- Scripts -->
  <script src="../../global/js/Component.min599c.js?v4.0.2"></script>
  <script src="../../global/js/Plugin.min599c.js?v4.0.2"></script>
  <script src="../../global/js/Base.min599c.js?v4.0.2"></script>
  <script src="../../global/js/Config.min599c.js?v4.0.2"></script>

  <script src="../assets/js/Section/Menubar.min599c.js?v4.0.2"></script>
  <script src="../assets/js/Section/GridMenu.min599c.js?v4.0.2"></script>
  <script src="../assets/js/Section/Sidebar.min599c.js?v4.0.2"></script>
  <script src="../assets/js/Section/PageAside.min599c.js?v4.0.2"></script>
  <script src="../assets/js/Plugin/menu.min599c.js?v4.0.2"></script>

  <!-- Config -->
  <script src="../../global/js/config/colors.min599c.js?v4.0.2"></script>
  <script src="../assets/js/config/tour.min599c.js?v4.0.2"></script>
  <script>
    Config.set('assets', '../assets');
  </script>

  <!-- Page -->
  <script src="../assets/js/Site.min599c.js?v4.0.2"></script>
  <script src="../../global/js/Plugin/asscrollable.min599c.js?v4.0.2"></script>
  <script src="../../global/js/Plugin/slidepanel.min599c.js?v4.0.2"></script>
  <script src="../../global/js/Plugin/switchery.min599c.js?v4.0.2"></script>
  <script src="../../global/js/Plugin/jquery-placeholder.min599c.js?v4.0.2"></script>
  <script>
    (function(document, window, $) {
      'use strict';

      var Site = window.Site;
      $(document).ready(function() {
        Site.run();
      });
    })(document, window, jQuery);
  </script>


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