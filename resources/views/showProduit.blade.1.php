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
							<ul class="slides">
							@foreach($photos as $photo)
						
								<li data-thumb="../storage/{{$photo->chemin}}">
									<img src="../storage/{{$photo->chemin}}" />
								</li>
							@endforeach
							</ul>
						</div>
<!-- FlexSlider -->
 
				</div>	
				<div class="col-md-7 single-top-right">
					<div class="details-left-info simpleCart_shelfItem">
						<h3>{{$livre->titre}}</h3>
						<div style="width:150px;border-bottom:solid 1px black;" ></div>
						<br>
						<h2 class="quick">المجال</h2>
					    <p class="quick_desc">{{$livre->domaine}}</p>

						<h2 class="quick">اللغة</h2>
					    <p class="quick_desc">{{$livre->langue}}</p>
					
						<h2 class="quick">تفاصيل حول الكتاب</h2>
						<p class="quick_desc">{{$produit->description}}</p>

						<h2 class="quick">حالة الكتاب ( 10 )</h2>
					    <p class="quick_desc">{{$livre->etat_livre}}</p>

						<?php $prixDuree = 'مدة التبادل ( يوم )' ;
						      if($produit->type_offre == 'بيع') 
							  {
								   $prixDuree = 'سعر البيع ( دج )' ;
							  }     
						 ?>

						<h2 class="quick">نوع العرض</h2>
					    <p class="quick_desc">{{$produit->type_offre}}</p>

						
					
						<h2 class="quick">{{$prixDuree}}</h2>
						<p class="quick_desc">{{$produit->prixDuree}}</p>

						<!--<h2 class="quick">حالة العرض</h2>
						<p class="quick_desc">{{$produit->etat_offre}}</p>-->

						<h2 class="quick">العدد</h2>
					    <p class="quick_desc">{{$produit->nombre}}</p>

						<h2 class="quick">الولاية</h2>
					    <p class="quick_desc">{{$produit->lieu}}</p>
					
						
					<div class="clearfix"> </div>

				<div class="single-but item_add custmBtn">
					<a  href="{{ route('produit.edit',$produit->id) }}">
					<button>
						 تعديل المعلومات	
					</button>
					</a>
<br> <br>
				<form action="{{ route('produit.destroy',$produit->id) }}" method="post">
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
// Can also be used with $(document).ready()
$(document).ready(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>

@endsection