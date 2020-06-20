<!DOCTYPE html>
<html lang="en">
    <head>
    <title>TRANSPORTATION</title>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>

    <link rel="stylesheet" href="{{asset('css/lightslider.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/aos.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/animate.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/loader.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/login.css')}}"/>
</head>
<body data-spy="scroll" data-offset="300">
 <div id="site-content">
      <div class="site-nav-section">
        <div class="site-logo">
            <a href="#">Wist</a>
        <div class="sub-logo">
            <p><span>.</span>com</p>
         </div>
     </div>
    </div>   

   @yield('content_login_form')
</div>
 </div>
     <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#46ddb0"/></svg></div>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/loader.js"></script>
  <script src="js/lightslider.js"></script> 
  <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
