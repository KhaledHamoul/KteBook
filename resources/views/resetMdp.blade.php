<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>KteBook Shop</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.0.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
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
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){		
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
				</script>	
<!-- start menu -->
<script src="js/simpleCart.min.js"> </script>
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>				
</head>
<body dir="rtl"> 
	<!--top-header-->
	<div class="top-header">
	<div class="container">
		<div class="top-header-main" >
			<div class="col-md-4 top-header-left">
				<div class="search-bar">
					<input type="text" value="بحث" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
					<input type="submit" value="">
				</div>
			</div>

			<div class="col-md-4 top-header-middle">
				<a href="index.html"><img src="images/logo-4.png" alt="" /></a>
			</div>

			<div class="col-md-4 top-header-right">
				
			</div>
			
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!--top-header-->
<!--bottom-header-->
	<div class="header-bottom">
		<div class="container">
			<div class="top-nav">
				<ul class="memenu skyblue"><li class="active"><a href="index.html">الرئيسية</a></li>
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
	<!--start-breadcrumbs-->
	<div class="breadcrumbs">
		<div class="container">
			<div class="breadcrumbs-main">
				<ol class="breadcrumb">
					<li><a href="index.html">الرئيسية</a></li>
					<li class="active">حسابي</li>
				</ol>
			</div>
		</div>
	</div>
	<!--end-breadcrumbs-->
	<!--start-account-->
	<div class="account">
		<div class="container"> 
			<div class="account-bottom">
				<div class="col-md-6 account-left">
					 
				
					
				</div>
				<div class="col-md-5"  >
					<form  method="POST" action="{{ route('password.email') }}">
						{!! csrf_field() !!}   
						
					<div class="account-top heading">
						<h3>تغيير كلمة المرور </h3>
					</div>
					<div class="address">
						<span>عنوان البريد الإلكتروني</span>
						<input type="email" name="email" value="" required >
						 @if ($errors->has('email'))
                                    <span>
                                        <strong>لا يوجد مستخدم مسجل بهذا البريد الإلكتروني  ! </strong>
                                    </span>
                                @endif
					</div>
					
					<div class="address">
						<input type="submit" value="إرسال رابط تغيير كلمة المرور">
						
						
					</div>
				</div>
				</form>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--end-account-->
	<!--start-footer-->
	<div class="footer">
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
		<script type="text/javascript">
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
								</script>
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	</div>
	<!--end-footer-text-->	
</body>
</html>