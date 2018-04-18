@extends('header')

@section('contenu')  

	<!--start-single-->
	<div class="single contact">
		<div class="container">
			<div class="single-main">
				<div class="col-md-9 single-main-left">
				<div class="sngl-top">
					<div class="col-md-5 single-top-left">	
						<div class="flexslider">
							<ul class="slides"  id="userPhoto" >
							<li><img src="/lara/public/storage/1111.jpg"  id="photo"/></li>	
							
							</ul>
						</div>
						<input type="file" id="inp" style="visibility:hidden" />
						<span id="name"></span>

							
<!-- FlexSlider -->
 
				</div>	
				
				<div class="col-md-7 single-top-right">
					<div class="details-left-info simpleCart_shelfItem">
						<h3>{{$user->user_name}}</h3>
						<div style="width:150px;border-bottom:solid 1px black;" ></div>
						<br>

						<h2 class="quick">الإسم</h2>
					    <p class="quick_desc">{{$user->prenom}}</p>
					
						<h2 class="quick">اللقب</h2>
						<p class="quick_desc">{{$user->nom}}</p>

						<h2 class="quick">عنوان البريد الإلكتروني</h2>
					    <p class="quick_desc">{{$user->email}}</p>

						<h2 class="quick">الولاية</h2>
						<p class="quick_desc">{{$user->wilaya}}</p>

						<h2 class="quick">عضو منذ</h2>
					    <p class="quick_desc">{{$user->created_at->toDateString()}}</p>

						<h2 class="quick">آخر تحديث للمعلومات الشخصية</h2>
					    <p class="quick_desc">{{$user->updated_at->toDateString()}}</p>

						<h2 class="quick">عدد عروض البيع</h2>
						<p class="quick_desc">{{$vente}}</p>

						<h2 class="quick">عدد عروض التبادل</h2>
						<p class="quick_desc">{{$echange}}</p>


					
						
					<div class="clearfix"> </div>

				<div class="single-but item_add custmBtn">
					<a  href="">
					<button>
						 تعديل المعلومات	
					</button>
					</a>
<br> <br>
				<form action="" method="post">
					 <input name="_method" type="hidden" value="DELETE">
   						 {{ csrf_field() }}
					
					
						<input type="submit" value="حذف الكتاب"/>

				</form>	

				
					
					
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div> </div> </div> </div> </div>       

	 <script defer src="/lara/public/js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="/lara/public/css/flexslider.css" type="text/css" media="screen" />

	<script>
						$('#userPhoto').click( function(event) {
							$('#inp').trigger('click');
   
  });

							$('#inp').change(function(event){
								
    $("#photo_clone").fadeIn("fast").attr('src',URL.createObjectURL(event.target.files[0]));
	 var tmppath = URL.createObjectURL(event.target.files[0]);
							});
							</script>

	<script>
// Can also be used with $(document).ready()
$(document).ready(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>

@endsection