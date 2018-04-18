<!DOCTYPE html>
<html dir="rtl">
<head>
<title>KteBook Shop</title>

<link href="/lara/public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

	
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="/lara/public/js/jquery-1.11.0.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="/lara/public/css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Free Style Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Alegreya+Sans+SC:100,300,400,500,700,800,900,100italic,300italic,400italic,500italic,700italic,800italic,900italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<!--//fonts-->
<script type="text/javascript" src="/lara/public/js/move-top.js"></script>
<script type="text/javascript" src="/lara/public/js/easing.js"></script>
<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){		
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
				</script>	
<!-- start menu -->
<script src="/lara/public/js/simpleCart.min.js"> </script>
<link href="/lara/public/css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="/lara/public/js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>				
</head>
<body> 


	<!--top-header-->
	<div class="top-header"id="haut">
	<div class="container">
		<div class="top-header-main" >
			<div class="col-md-4 top-header-left">
				<div class="search-bar">
					<input type="text" value="بحث" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
					<input type="submit" value="">
				</div>
			</div>

			<div class="col-md-4 top-header-middle">
				<a href="index.html"><img src="/lara/public/images/logo-4.png" alt="" /></a>
			</div>

			<div class="col-md-4 top-header-right">
				 @if (Auth::guest())
				<div class="b-btn"> 
								<a href="{{ route('account')}}">حسابي</a>
							</div>
				@else
				<link href="/lara/public/css/dashboard.css" rel="stylesheet" type="text/css" media="all" />
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

                     <div class="myAccount"> 
			    
						  <form action="{{ route('logout') }}" method="POST">
						<ul>
							<li><h4>{{ Auth::user()->user_name }}</h4></li>	
							<li><img src="/lara/public/images/profile.jpg"/></li>	
						</ul>
			  <ul  class="userIcons">
					<li>
						<a href="{{route('user.show',auth::id())}}">
							<i class="fa fa-user-o" ></i>
						</a>
					</li>
					<li >
						<a href="index.html">
							<i class="fa fa-bell-o"></i>
						</a>
					</li>
					<li>
								<button type="submit" ><i class="fa fa-power-off"></i></button>
                                            {{ csrf_field() }}
					</li>
					</ul>
                          </form>
				
			</div>

			


				  @endif
			</div>
			
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!--top-header-->
	<!--bottom-header-->
	<div class="header-bottom" id="menu">
		<div class="container">
			<div class="top-nav">
				<ul class="memenu skyblue"><li class="active"><a href="{{ route('index')}}">الرئيسية</a></li>
					<li class="grid"><a href="#">خدمات</a>
						<div class="mepanel">
							<div class="row">
								<div class="col1 me-one">
									<h4>بيع</h4>
									<ul>
										<li><a href="products.html">كتب جديدة</a></li>
										<li><a href="products.html">كتب قديمة</a></li>
										</ul>
								</div>

								<div class="col2 me-one">
									<h4>تبادل</h4>
									<ul>
										<li><a href="products.html">كتب جديدة</a></li>
										<li><a href="products.html">كتب قديمة</a></li>
										</ul>	
								</div>
									</div>
						</div>
					</li>
					<li class="grid"><a href="#">حول الموقع</a></li>
					
					
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!--bottom-header-->

    <!--debut_contenu-->
	@if(auth::check())
	<!--start-breadcrumbs-->
	<div class="dash" >

			
				<ul>
					
					<li>
						<a href="{{route('user.show',auth::id())}}">
							<i class="fa fa-user-o" ></i>
						</a>
					</li>
					<li >
						<a href="{{route('produit.index')}}">
							<i class="fa fa-folder-o" ></i>
						</a>
					</li>
					<li>
						<a href="index.html">
							<i class="fa fa-heart-o" ></i>
						</a>
					</li>
					<li >
						<a href="index.html">
							<i class="fa fa-bell-o"></i>
						</a>
					</li>
					<li>
						<a href="{{route('user.edit',auth::id())}}">
							<i class="fa fa-cogs" ></i>
						</a>
					</li>
				</ul>
			
		
	</div>
	<!--end-breadcrumbs-->
	@endif

                      @yield('contenu')
    <!--fin_contenu-->

    <!--start-footer-->
	<div class="footer" id="foot">
		<div class="container">
			<div class="footer-top">
				<div class="col-md-3 footer-left">
					<h3>معلومات</h3>
					<ul>
						<li><a href="#">تيارت تقرأ</a></li>
						<li><a href="contact.html">للاتصال : 0793857193</a></li>
						<li><a href="#">ktebex.com</a></li>
						<li><a href="#">خلف الموقع</a></li>			 
					</ul>
				</div>
				<div class="col-md-3 footer-left">
					<h3>الحساب الشخصي</h3>
					<ul>
						<li><a href="account.html">حسابي</a></li>	 					 
					</ul>
				</div>
				<div class="col-md-3 footer-left">
					<h3>خدمة الزبائن</h3>
					<ul>
						<li><a href="#">FAQ</a></li>
						<li><a href="#">إقتراحات</a></li>
						<li><a href="#">تقديم شكوى</a></li>
						<li><a href="#">قوانين المعاملات</a></li>					 
					</ul>
				</div>
				<div class="col-md-3 footer-left">
					<h3>خدمات</h3>
					<ul>
						<li><a href="#">تبادل الكتب</a></li>
						<li><a href="#">بيع الكتب</a></li>			 
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--end-footer-->
	<!--end-footer-text-->
	<div class="footer-text">
		<div class="container">
			<div class="footer-main">
				<p class="footer-class"> جميع الحقوق محفوظة © 2017| تصميم  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
			</div>
		</div>
		<!--<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>-->
		<a href="#haut" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	</div>
	<!--end-footer-text-->	

	
</body>
</html>