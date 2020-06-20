<!-- 
This page is the home page or dashboard where are user is redirected on a succesfull login

-->

<!-- this statement kindof includes the layout of the design to this page -->


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
    <link rel="stylesheet" href="{{asset('css/sty.css')}}"/>
</head>
<body data-spy="scroll" data-offset="300">
    <div id="site-content">
    	<div id="fixed-coment-toggler">
    		<i class="fa fa-comment"></i>
    	</div>
    	<div id="top-fixed-comment">
    	<div class="coment-box">
    		<div id="toggle-out-comment">&times;</div>
    		<div class="top-social-icons">
    			<h4>Follow us on</h4>
    			<ul>
    				<li class="google-icon"><a href="#"><i class="fa fa-google-plus"></i> Google</a></li>
    				<li class="facebook-icon"><a href="#"><i class="fa fa-facebook"></i> Facebook</a></li>
    				<li class="twitter-icon"><a href="#"><i class="fa fa-twitter"></i> Twitter</a></li>
    			</ul>
    		</div>
				<div class="coment-box-main">
					<div class="coment-box-header">
					<h4>Drop a comment</h4>
					<div class="coment-sub"></div>
				</div>
					<form>
						<div class="top-form">
							<div class="logo-display">
								<img src="img/logo.jpg" class="img-responsive" />
							</div>
							<input type="text" name="name" placeholder="Name" required id="name" />
						</div>
						<div class="bottom-form">
							<textarea rows="5" cols="30" id="bodyText" placeholder="Comment here"></textarea><br>
							<input type="submit" name="sbt" value="comment" id="addComent">
						</div>
					</form>
				</div>
			</div>
		</div>
    <div class="site-nav-section">
        <div class="site-logo">
        <a href="#">Wist</a>
        <div class="sub-logo">
        <p><span>.</span>com</p>
        </div>
        </div>
        <div class="menu-wrap"><!--mobile menu-->
             <input type="checkbox" class="toggler">
             <div class="hamburger"><div></div></div>
             <div class="menu">
             <div class="side-nav-logo">
	        <div class="site-logo">
	        <a href="#">Wist</a>
	        <div class="sub-logo">
	        <p><span>.</span>com</p>
	        </div>
	    	</div>
	        </div>
	        <div class="side-nav-contents">
                <!-- the mobile view-->
	        	<ul>
	        		<li><a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
                     Logout</a>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    </li>
	        		<li class="signup"><a href="#"></a>{{ Auth::user()->name }}</li>
	        	</ul>
	        </div>

            </div>
        </div>
        <div class="site-right-nav">
            <ul class="site-navbar">
                <li><a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();">
                 Logout</a>
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                </li>
                <li><a href="#">|</a></li>
                <li class="signup"><a href="#">{{ Auth::user()->name }}</a></li>
            </ul>
        </div>
    </div>
    <div class="container support">
        <div class="search-section">
            <input type="text" name="search" placeholder="Search entire site here"/>
            <i class="fa fa-search"></i>
        </div>
        <div class="call-support">
            <div class="call-icon">
                <i class="fa fa-phone"></i>
            </div>
            <div class="support-content">
                <p>24/7 Support Number</p>
                <span>09037494084</span>
            </div>
        </div>
    </div>
    <div class="site-herobg-section"></div>
        <div class="container site-form-section">
    <div class="row">
    <div class="col-md-6"></div>
    <div class="col-md-6">
    <div class="site-form">
    <div class="form">
      <div class="form-header">
        <h3>Book a bus</h3>
      </div>
      <form action="#" method="get">
        <div class="s-form">
        <input type="text" name="location" placeholder="State" required />
      </div>
        <div class="s-form">
        <input type="text" name="location" placeholder="Select Terminal" required />
      </div>
        <div class="s-form">
        <input type="number" name="no-sits" placeholder="Select Destination" required />
      </div>
        <div class="s-form">
        <input type="text" name="time" placeholder="No. of Child(ren) Seats" required />
      </div>
      <div class="s-form">
        <input type="text" name="time" placeholder="Departured Date" required />
      </div>
       <div class="sbt-form">
        <input type="submit" value="Book Now" class="sbtn" />
      </div>
      </form>
    </div>
  </div>
</div>
</div>
</div>
<div class="container">
	<div id="section-available-buses">
    <div class="section-header">
            <h3>Available Buses</h3>
            <p>Available bus comapanies in the site</p>
            <div class="sub"></div>
        </div>
        <div class="bus-slider">
            <ul id="autoWidth" class="cs-hidden">
                <!----1--->
                <li class="item-a">
                    <div class="slider">
                <div class="slider-content">
                <div class="slider-img">
                        <img src="img/bus-company/bus1.jpeg" class="img-responsive">
                    </div>
                        <div class="slider-text">
                            <h3>ABC Transport company</h3>
                            <p>Lekki, Lagos</p>
                        </div>
                          <div class="top-banner">
                            <span>24/7 Services</span>
                        </div>
                    </div>
                </div>
            
                </li>
                
                 <!----2--->
                <li class="item-a">
                    <div class="slider">
                <div class="slider-content">
                <div class="slider-img">
                        <img src="img/bus-company/bus2.jpeg" class="img-responsive">
                    </div>
                        <div class="slider-text">
                            <h3>Good is good trasport company</h3>
                            <p>Umuahia, Abia state</p>
                        </div>
                        <div class="top-banner">
                            <span>24/7 Services</span>
                        </div>
                    </div>
                </div>
            
                </li>
                 <!----3--->
                <li class="item-a">
                    <div class="slider">
                <div class="slider-content">
                <div class="slider-img">
                        <img src="img/bus-company/bus3.jpeg" class="img-responsive">
                    </div>
                        <div class="slider-text">
                            <h3>G.U.O Transport company</h3>
                            <p>Akwaibom</p>
                        </div>
                          <div class="top-banner">
                            <span>24/7 Services</span>
                        </div>
                    </div>
                </div>
            
                </li>
                 <!----4--->
                <li class="item-a">
                    <div class="slider">
                <div class="slider-content">
                <div class="slider-img">
                        <img src="img/bus-company/bus4.jpeg" class="img-responsive">
                    </div>
                        <div class="slider-text">
                            <h3>Peace Mass Transit</h3>
                            <p>Umuahia, Abia state</p>
                        </div>
                          <div class="top-banner">
                            <span>24/7 Services</span>
                        </div>
                    </div>
                </div>
            
                </li>
                                 <!----5--->
                <li class="item-a">
                    <div class="slider">
                <div class="slider-content">
                <div class="slider-img">
                        <img src="img/bus-company/bus5.jpeg" class="img-responsive">
                    </div>
                        <div class="slider-text">
                            <h3>Ifesinachi Transport company</h3>
                            <p>Umuahia, Abia state</p>
                        </div>
                          <div class="top-banner">
                            <span>24/7 Services</span>
                        </div>
                    </div>
                </div>
            
                </li>
        
            </ul>
               
        </div>
</div>
    <div class="section-main">
        <div class="section-header">
            <h3>What we do?</h3>
            <p>Our services</p>
            <div class="sub"></div>
        </div>
        <div class="row">
        <div class="col-md-12">
        <div class="row">
            <div class="col-md-4">
                <div class="sf-sec">
                    <div class="sec-content">
                        <p>Book your bus to the locations that might be selected from the buses.</p>
                        <p>We bring you closer to your transport agents you could send them a message about suggestion of improvements to their bus.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="ss-sec">
                    <div class="sec-content">
                        <p>We help you compare bus prices to help you determine the one suited for your project.</p>
                        <p>We bring the terminals and their addresses of different transport companies to you to make you more precise.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="sth-sec">
                    <div class="sec-content">
                        <p>We grant you the best avenue to make buss fare payment without charges from any bank of your choice.</p>
                        <p>We give you access to partner with us to make your bus or transport company know to the entire world.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="section-comment">
	<div class="row">
			<div class="coment-display-section">
				<div class="coment-display-section-header">
					<h4>Comments</h4>
					<div class="coment-sub"></div>
				</div>
				<div class="fixed-coment">
					<div class="coment-img">
						<img src="img/logo.jpg" class="img-responsive">
					</div>
					<div class="coment-main">
						<div class="coment-header-sec">
						<span class="coment-header">Admin</span>
						<p class="coment-sub-header">From Admin</p>
					</div>
					<div class="coment-body">
						<p>Welcome to wist where your trip is made easy at your own comfort zone. We connect you to different road transportation companies in Nigeria.</p>
					</div>
					</div>
				</div>
		</div>	
		<div id="container"></div>
	</div>
</div>
</div>
<div class="site-footer">
	<div class="footer-content">
		<div class="footer-nav">
			<ul>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
			</ul>
		</div>
		<div class="footer-main">
			<p>@wist.com 2020. All Right Reserved</p>
		</div>
	</div>
</div>























</div>

   

        <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#46ddb0"/></svg></div>




  <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('js/aos.js')}}"></script>
  <script src="{{asset('js/jquery.sticky.js')}}"></script>
  <script src="{{asset('js/loader.js')}}"></script>
  <script src="{{asset('js/lightslider.js')}}"></script> 
  <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
</body>
</html>


