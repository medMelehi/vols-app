<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<title>Flight-Confort</title>
<!-- ///////////////////// -->
	<meta charset="utf-8">
<meta name="description" content="Destino project">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- ///////////////////// -->

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Styles -->
    <link href="{{ asset('css/mycss.min.css') }}" rel="stylesheet">
    <!-- Scripts -->
    <script src="{{ asset('js/myscripts.min.js') }}" defer></script>
				<!-- ///////////////////// -->


<!-- ///////////////////// -->
<link rel="stylesheet" type="text/css" href="{{ asset('styles/bootstrap4/bootstrap.min.css') }}">
<link href="{{ asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/animate.css') }}">
<link href="{{ asset('plugins/magnific-popup/magnific-popup.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('styles/main_styles.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('styles/responsive.css') }}">
<?php if (\Route::current()->getName() == 'AboutUs'): ?>	
	<link rel="stylesheet" type="text/css" href="styles/about_styles.css">
	<link rel="stylesheet" type="text/css" href="styles/about_responsive.css">
<?php endif ?>
<?php if (\Route::current()->getName() == 'ContactUs'): ?>	
	<link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
	<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
<?php endif ?>
<?php if (\Route::current()->getName() == 'Offers'): ?>	
	<link rel="stylesheet" type="text/css" href="styles/offers_styles.css">
<link rel="stylesheet" type="text/css" href="styles/offers_responsive.css">
<?php endif ?>
<!-- ///////////////  links of dropdown_tree  /////////////// -->

<link href="{{ asset('css/jquerysctipttop.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/bootstrap4/bootstrap.min.css') }}">
	<link rel="stylesheet" href="https://cdn.materialdesignicons.com/5.0.45/css/materialdesignicons.min.css">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('js/comboTreePlugin.js') }}"  type="text/javascript"></script>
<!-- ////////////////////////////// -->


</head>
<body onload="setTimeout(moveup, 2500);"  style="background-color: #669;">
@include('partials.registerPro')


<div class=""  >
		<header class="header" style=" z-index: 1; top:0px;" >
			<div class="container" >
				<div class="row">
					<div class="col" >
						<div style="" class="header_container d-flex flex-row align-items-center justify-content-start">

							<!-- Logo -->
							<div class="logo_container" style=" position: absolute;left: 15px; top:8px; ">
								<div class="" >
									<div class="" style=" padding-left: 20px;padding:0px; text-align: center;">
										<img src="images/logo3.png" style="margin-right: : 30px;padding-right: 5px;width: 160px; height: 47px;">
										<h3 style=" padding:0px;  font-size: 20px; color: #fff;margin-bottom:0px;" >FLIGHT-CONFORT</h3>
									</div>
								</div>
							</div>

							<!-- Main Navigation -->
							<div style="position: absolute;left: 320px;">
							<nav class="main_nav ml-auto" >
								<ul class="main_nav_list">
									<li style="" class="main_nav_item <?php if (\Route::current()->getName() == 'Home'): ?>	
									active<?php endif ?> "><a href="{{ route('Home') }}">Home</a></li>
									<li class="main_nav_item <?php if (\Route::current()->getName() == 'Offers'): ?>	
									active<?php endif ?>"><a href="{{ route('Offers') }}">Offers</a></li>
									<li class="main_nav_item <?php if (\Route::current()->getName() == 'AboutUs'): ?>	
									active<?php endif ?>"><a href="{{ route('AboutUs') }}">About us</a></li>
									<li class="main_nav_item <?php if (\Route::current()->getName() == 'ContactUs'): ?>	
									active<?php endif ?>"><a href="{{ route('ContactUs') }}">Contact</a></li>
            
                                   
                 				</ul>
                        	</nav>

                        	</div>

                        	<div class="search" style="background-color: ; width: 195px;text-align: center;" >
								<nav class="" style="" >
										
										<ul class="main_nav_list" >
										
										@guest
			                                <li  class="main_nav_item1 navbarDrop1" >
			                                    <a   id=""  href="#" role="button"  aria-haspopup="true" aria-expanded="false" v-pre>Login</a>
                                                
                   
                                            </li>
                                             <div id="loginDrop1" class=" " aria-labelledby="navbarDropdown" style="position: absolute; right: -10px; display:none; border: 5px solid #999;border-bottom: 30px solid #999; background-color: #ccc; padding-top: 8px;  width: 270px; ">
                        <div   class="container" style=" width: 250px;padding:0px; margin-right: 6px;">


                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                            <div style=""class="">
                            <label for="email" style=" margin:0px; " class="">E-Mail:</label>
                          
                            
                                <input class="form-control @error('email') is-invalid @enderror" style="margin-top: 0px; background-color: #eee;width: 250px;" id="email" type="email"  name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                                </div>

                        <div class="">
                            <label style=" margin:0px; margin-top: 5px; " for="password" class="">{{ __('Password') }}</label>

                            
                                <input style="margin-top: 0px; background-color: #eee;width: 250px;"id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="" style="margin: 5px;margin-top: 10px; ">
                            
                                <button type="submit" class="btn btn-primary" style="margin-right: 30px;">
                                    {{ __('Login') }}
                                </button> 
                                 <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} >

                                    <label class="" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                        </div>

                          
                          
                    </form>
                   
                </div>
                  <div style="text-align: center;position: absolute;left:70px;bottom: -25px; ">
                                @if (Route::has('password.request'))
                                    <a  id="jdj" href="{{ route('password.request') }}" style="color: #ff5555; margin: 0px; padding: 0px;">
                                        Forgot Password?
                                    </a>
                                @endif
                            </div>
                
                                                </div>
                                                
			                                <li class="main_nav_item1">
			                                    <a  href="{{ route('register') }}">Register</a></li>
		                            	 @else
					                        <li class="main_nav_item1" style="width: 196px;  " >
			                                    <a id="navbarDropdown"  href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style=" width: 195px; ">
			                                        {{ Auth::user()->firstname }} {{ Auth::user()->lastname }} 
			                                    </a>

			                                    <div class="dropdown-menu dropdown-menu-right container" aria-labelledby="navbarDropdown" style="padding-top: 8px; height: 180px; width: 196px;  ">
			                                         <a class="dropdown-item" style=" color: #555; height:80px; padding-bottom:10px; "href="{{ route('profil') }}">
			                                            Profil</a>


			                                        <a class="dropdown-item" style="color: #555; padding-top: 0px; height:80px; "href="{{ route('logout') }}"
			                                           onclick="event.preventDefault();
			                  
			                                                         document.getElementById('logout-form').submit();">
			                                         Logout </a>


			                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
			                                            @csrf
			                                        </form>
			                                    </div>
			                                </li>
		                            	 @endguest
		                            	 </ul>
		                        	</nav>
							</div>
                        
                        			
		                      
                        	


					<!-- Hamburger -->
						<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>

						</div>
					</div>
				</div>
			</div>
		</header>

	<div class="menu_container menu_mm" style="border: solid 2px #fff;">

		<!-- Menu Close Button -->
		<div class="menu_close_container">
			<div class="menu_close"></div>
		</div>

		<!-- Menu Items -->
		<div class="menu_inner menu_mm">
			<div class="menu menu_mm">
				
				<ul class="menu_list menu_mm">
					<li class="menu_item menu_mm"><a href="#">Home</a></li>
					<li class="menu_item menu_mm"><a href="offers.html">Offers</a></li>
					<li class="menu_item menu_mm"><a href="about.html">About us</a></li>
					<li class="menu_item menu_mm"><a href="contact.html">Contact</a></li>
					<li class="menu_item menu_mm"><a href="{{ route('login') }}">Login</a></li>
					<li class="menu_item menu_mm"><a href="{{ route('register') }}">Register</a></li>
				</ul>

				<!-- Menu Social -->
				
				<div class="menu_social_container menu_mm">
					<ul class="menu_social menu_mm">
						<li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					</ul>
				</div>

				<div class="menu_copyright menu_mm">Colorlib All rights reserved</div>
			</div>

		</div>

	</div>
 

                @yield('content')
            
              <!-- Footer -->

    <footer class="footer">
        <div class="container">
            <div class="row">

                <!-- Footer Column -->
                <div class="col-lg-4 footer_col">
                    <div class="footer_about">
                        <!-- Logo -->
                        <div class="logo_container">
                            <div class="" style="padding-left: 20px;padding-top:0px; text-align: center;">
                                    <img src="images/logo3.png" style=" width: 150px; height: 40px;">
                                        <h3 style=" padding-top:0px;  font-size: 25px; color: #fff;margin-bottom:0px;" >FLIGHT CONFORT</h3>
                                    <h5 style="padding-top:0px;font-size: 15px; color:#fff;">satisfaction</h5>
                                </div>
                        </div>
                        <div class="footer_about_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer pulvinar sed mauris eget tincidunt. Sed lectus nulla, tempor vel eleifend quis, tempus rut rum metus. Pellentesque ultricies enim eu quam fermentum hendrerit.</div>
                        <div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
                    </div>
                </div>

                <!-- Footer Column -->
                <div class="col-lg-4 footer_col">
                    <div class="footer_latest">
                        <div class="footer_title">Latest News</div>
                        <div class="footer_latest_content">

                            <!-- Footer Latest Post -->
                            <div class="footer_latest_item">
                                <div class="footer_latest_image"><img src="images/latest_1.jpg" alt="https://unsplash.com/@peecho"></div>
                                <div class="footer_latest_item_content">
                                    <div class="footer_latest_item_title"><a href="news.html">Brazil Summer</a></div>
                                    <div class="footer_latest_item_date">Jan 09, 2018</div>
                                </div>
                            </div>

                            <!-- Footer Latest Post -->
                            <div class="footer_latest_item">
                                <div class="footer_latest_image"><img src="images/latest_2.jpg" alt="https://unsplash.com/@sanfrancisco"></div>
                                <div class="footer_latest_item_content">
                                    <div class="footer_latest_item_title"><a href="news.html">A perfect vacation</a></div>
                                    <div class="footer_latest_item_date">Jan 09, 2018</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Footer Column -->
                <div class="col-lg-4 footer_col">
                    <div class="tags footer_tags">
                        <div class="footer_title">Tags</div>
                        <ul class="tags_content d-flex flex-row flex-wrap align-items-start justify-content-start">
                            <li class="tag"><a href="#">travel</a></li>
                            <li class="tag"><a href="#">summer</a></li>
                            <li class="tag"><a href="#">cruise</a></li>
                            <li class="tag"><a href="#">beach</a></li>
                            <li class="tag"><a href="#">offer</a></li>
                            <li class="tag"><a href="#">vacation</a></li>
                            <li class="tag"><a href="#">trip</a></li>
                            <li class="tag"><a href="#">city break</a></li>
                            <li class="tag"><a href="#">adventure</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </footer>

</div>


<script src="{{ asset('styles/bootstrap4/popper.js') }}"></script>
<script src="{{ asset('styles/bootstrap4/bootstrap.min.js') }}"></script>
<script src="{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
<script src="{{ asset('plugins/easing/easing.js') }}"></script>
<script src="{{ asset('plugins/parallax-js-master/parallax.min.js') }}"></script>
<script src="{{ asset('plugins/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>

<script type="text/javascript">

var SampleJSONData =  [
 {
 id: 1,
 title: 'morocco',
        subs: [
            {
                id: 10,
 title: 'casablanca',
 subs: [{id: 101,
 title: 'Mohamed V Airport222'}]
            }, {
                id: 11,
 title: 'RABAT',
 subs: [{id: 111,
 title: 'Sale Airport'}]
            }, {
                id: 12,
 title: 'MARRAKECH',
 subs: [{id: 121,
 title: 'Menara Airport'}]
            }, {
                id: 13,
 title: 'TANGER',
 subs: [{id: 131,
 title: 'Boukhalf Airport'}]
            }
        ]
 }, {
 id: 2,
 title: 'FRANCE',
 subs: [
 {
 id: 20,
 title: 'PARIS',
 subs: [{id: 201,
 title: 'Paris Orly Airport'},{id: 202,
 title: 'Disneyland Railway Station'},{id: 203,
 title: 'Gare du Nord Rail Stn'}]
 }, {
 id: 21,
 title: 'Marseille',
 subs: [{id: 211,
 title: 'Marseille Railway'}]
 }, {
 id: 22,
 title: 'Lyon',
 subs: [{id: 221,
 title: 'Lyon Airport'},{id: 222,
 title: 'Lyon Part-Dieu Railway Station'}]
 }
 ]
 }
]; 



var comboTree1, comboTree2;

jQuery(document).ready(function($) {

	
		
		comboTree3 = $('#justAnInputBox1').comboTree({
			source : SampleJSONData,
			isMultiple: true,
			cascadeSelect: true,
			collapse: false
		});
		comboTree3 = $('#justAnInputBox2').comboTree({
			source : SampleJSONData,
			isMultiple: true,
			cascadeSelect: true,
			collapse: false
		});

		/*comboTree3.setSource(SampleJSONData2);*/


	
});


</script>

</body>
</html>

