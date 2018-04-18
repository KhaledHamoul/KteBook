@extends('header')

@section('contenu')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!--start-breadcrumbs-->
	<div class="dash" style="border-top:none">

			
				<ul>
					<li >
						<a href="{{route('produitForSale')}}">
							<i class="fa fa-shopping-cart" ></i>
						</a>
					</li>
					<li>
						<a href="{{route('produitToExchange')}}">
							<i class="fa fa-exchange"></i>
						</a>
					</li>
				</ul>
			
		
	</div>
	<!--end-breadcrumbs-->


<div class="product">
		<div class="container">
			<div class="product-main">
				<div class="col-md-9 p-left">
				<div class="product-one">

			 @foreach($produits as $prod)
				 <div class="col-md-4 product-left single-left" > 
					<div class="p-one simpleCart_shelfItem">
						<a href="{{route('produit.destroy',$prod->id)}}">
								<img src="storage/{{$photos[$prod->id][0]->chemin}}" />
								<div class="mask mask1">
									<span>مزيد من التفاصيل</span>
								</div>
							</a>
						<h4>{{$livres[$prod->id]->titre}}</h4>
						<p><a class="item_add" href="#"><i></i> <span class=" item_price">${{$prod->prixDuree}}</span></a></p>
					</div>
			
				</div>
				@endforeach
				

                <div class="col-md-4 product-left single-left"> 
					<div class="p-one simpleCart_shelfItem">
						<a href="{{route('produit.create')}}">
								<img src="storage/images/addBook.jpg" alt="" />
								<div class="mask mask1">
									<span>أضف كتابا</span>
								</div>
							</a>
						<p><a class="item_add" href="#"></a></p>
					</div>
			
				</div>


			</div>
		</div>
	</div>
  </div>
</div>


@endsection 