<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Box personal portfolio Template</title>
  <link rel="icon" href="{{asset('image/public/fav.png')}}" type="image/x-icon">

  <!-- theme css -->
  <link href="{{asset('css/public/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/public/style.css')}}" rel="stylesheet">
  <link href="{{asset('ionicons/css/ionicons.min.css')}}" rel="stylesheet">

  <!-- modernizr -->
  <script src="{{asset('js/public/modernizr.js')}}"></script>

  <!-- main css -->
  <link href="{{asset('css/app.css')}}" rel="stylesheet">
  <link href="{{asset('css/public/app-public.css')}}" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body>

<!-- Preloader -->
<div id="preloader">
  <div class="pre-container">
    <div class="spinner">
      <div class="double-bounce1"></div>
      <div class="double-bounce2"></div>
    </div>
  </div>
</div>
<!-- end Preloader -->

@yield('content')

<!-- footer -->
<footer>
  <div class="container-fluid">
    <p class="copyright">© Box Portfolio 2016</p>
  </div>
</footer>
<!-- end footer -->

<!-- back to top -->
<a href="#0" class="cd-top"><i class="ion-android-arrow-up"></i></a>
<!-- end back to top -->


<!-- jQuery -->
<script src="{{asset('js/public/jquery-2.1.1.js')}}"></script>
<!--  plugins -->
<script src="{{asset('js/public/bootstrap.min.js')}}"></script>
<script src="{{asset('js/public/menu.js')}}"></script>
<script src="{{asset('js/public/animated-headline.js')}}"></script>
<script src="{{asset('js/public/isotope.pkgd.min.js')}}"></script>


<!--  custom script -->
<script src="{{asset('js/public/custom.js')}}"></script>

<!--  main script -->
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/public/app-public.js')}}"></script>

<!-- google analytics  -->
<script>
  (function (i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r;
    i[r] = i[r] || function () {
      (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date();
    a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
    a.async = 1;
    a.src = g;
    m.parentNode.insertBefore(a, m)
  })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

  ga('create', 'UA-76796224-1', 'auto');
  ga('send', 'pageview');
</script>

</body>

</html>
