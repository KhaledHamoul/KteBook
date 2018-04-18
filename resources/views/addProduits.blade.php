@extends('header')

@section('contenu')

 <script src="/lara/public/js/dropzone.js"></script>
        <link rel="stylesheet" href="/lara/public/css/dropzone.css">

		

<div class="account" >
	<div class="container"> 
			<div class="account-bottom">
				<div class="col-md-6">

<form method="POST" action="{{ route('produit.store') }}" dir="rtl" enctype="multipart/form-data" >
						{!! csrf_field() !!}   
					<div class="account-top heading">
						<h3>إضافة كتاب</h3>

					</div>
					<div class="address">
						<span>عنوان الكتاب</span>
						<input type="text" name="titre" required>
						@if ($errors->first('titre'))<span>تم إضافة هذا العنوان مسبقا</span>@endif
					</div>
					<div class="address">
						<span>المجال</span>
						<input type="text" name="domaine"  value="{{old('domaine')}}" required>
					</div>
                    <div class="address">
						<span>اللغة</span>
				        <select class="select" id="email" name="langue"  required >
                             <option value = "العربية">العربية</option>
				             <option value = "الإنجليزية">الإنجليزية</option>
                             <option value = "الفرنسية">الفرنسية</option>
                             <option value = "لغة أخرى">لغة أخرى</option>
                        </select>
                    </div>
					<div class="address">
						<span>تفاصيل أخرى</span>
						<input type="text" name="description"  value="{{old('description')}}" required>
					</div>
                  <div class="address">
						<span>حالة الكتاب / 10</span>
				        <select class="select" id="email" name="etatLivre" required >
                                <option value = "1">1</option>
        				        <option value = "2">2</option>
		        		        <option value = "3">3</option>
			                	<option value = "4">4</option>
        			        	<option value = "5">5</option>
        			        	<option value = "6">6</option>
		        	        	<option value = "7">7</option>
                                <option value = "8">8</option>
			                	<option value = "9">9</option>
			                	<option value = "10">10</option>
                         </select>
					</div>
                     <div class="address">
						<span>العدد</span>
				       <input type="number" name="nombre" min="1"  value="{{old('nombre')}}" required />
                    </div>

                     <div class="address">
						<span>نوع العرض</span>
				        <select class="select" id="typeOffre" name="type_offre" required >
                             <option disabled selected value>حدد نوع العرض</option>
                             <option disabled  ></option>
                             <option value = "تبادل">تبادل</option>
				             <option value = "بيع">بيع</option>
                        </select>
                    </div>

					<div class="address">
						<span id="venteEchange"></span>
						<input type="number" id="inputVE"  min="1"  value="{{old('inputVE')}}" name="inputVE" style="display:none" required>
					</div>

					<div class="address">
						<span>الولاية</span>
		<select class="select" id="email" name="lieu" required >
            <option disabled selected value>حدد ولاية العرض </option>
            <option disabled  ></option>
				<option value = "أدرار">أدرار</option>
				<option value = "شلف">شلف</option>
				<option value = "الأغواط">الأغواط</option>
				<option value = "أم البواقي">أم البواقي</option>
				<option value = "باتنة">باتنة</option>
				<option value = "بجاية">بجاية</option>
				<option value = "بسكرة">بسكرة</option>
				<option value = "بشار">بشار</option>
				<option value = "البليدة">البليدة</option>
				<option value = "البويرة">البويرة</option>
				<option value = "تمنراست">تمنراست</option>
				<option value = "تبسة">تبسة</option>
				<option value = "تلمسان">تلمسان</option>
				<option value = "تيارت">تيارت</option>
				<option value = "تيزي وزو">تيزي وزو</option>
				<option value = "الجزائر">الجزائر</option>
				<option value = "الجلفة">الجلفة</option>
				<option value = "جيجل">جيجل</option>
				<option value = "سطيف">سطيف</option>
				<option value = "سعيدة">سعيدة</option>
				<option value = "سكيكدة">سكيكدة</option>
				<option value = "سيدي بلعباس">سيدي بلعباس</option>
				<option value = "عنابة">عنابة</option>
				<option value = "قالمة">قالمة</option>
				<option value = "قسنطينة">قسنطينة</option>
				<option value = "المدية">المدية</option>
				<option value = "مستغانم">مستغانم</option>
				<option value = "المسيلة">المسيلة</option>
				<option value = "معسكر">معسكر</option>
				<option value = "ورقلة">ورقلة</option>
				<option value = "وهران">وهران</option>
				<option value = "البيض">البيض</option>
				<option value = "إليزي">إليزي</option>
				<option value = "برج بو عريريج">برج بو عريريج</option>
				<option value = "بومرداس">بومرداس</option>
				<option value = "الطارف">الطارف</option>
				<option value = "تيندوف">تيندوف</option>
				<option value = "تيسمسيلت">تيسمسيلت</option>
				<option value = "واد سوف">واد سوف</option>
				<option value = "خنشلة">خنشلة</option>
				<option value = "سوق أهراس">سوق أهراس</option>
				<option value = "تيبازة">تيبازة</option>
				<option value = "ميلة">ميلة</option>
				<option value = "عين الدفلة">عين الدفلة</option>
				<option value = "النعامة">النعامة</option>
			    <option value = "تموشنت">عين تموشنت</option>
				<option value = "غرداية">غرداية</option>
				<option value = "غيليزان">غيليزان</option>
		</select>

			         </div>
					

					  <div class="address">
					 <span>صور للكتاب</span>
					 </div>

					 
     
   
<div id="addPhotos" style="width:100%;min-height:300px;border:solid 1px grey;">
	<div id="photosContainer" style="margin:auto ; margin-top:4.5px ;margin-bottom :4.5px ;width:95%;min-height:290px;text-align:center">
		<span id="msgAddPhoto" >أضف صور لكتابك</span>
	</div>
</div>

	  <input type="file"  name="photos[]" id="photos" style="visibility:hidden"  multiple required />
	  

					<div class="address new">
						<input type="submit" value="تسجيل" >
					</div>
                     
					</div>
				</form>





</div>
    </div>
        </div>
        </div>
		

    <script type="text/javascript" src="/lara/public/js/inputPhoto.js"></script>      

	<script>
						$('#addPhotos').click( function(event) {
							$('#photos').trigger('click');
   
  });

							$('#photos').change(function(event){
								
    //$("#photo_clone").fadeIn("fast").attr('src',URL.createObjectURL(event.target.files[0]));
	 $(".p").remove();
	
			for(var i=0 ; i < 6 ; i++)
{
	var tmppath = URL.createObjectURL(event.target.files[i]);
	if (tmppath != "") 
	{
		$("#msgAddPhoto").remove();
		var img = $('<img class="p" style=" max-width:30% ; max-height:140px ; margin-top : 20px ; margin-left: 20px ; border-radius : 2px ; box-shadow : 2px 2px 2px grey ">'); 
		img.attr('src', tmppath);
		img.appendTo('#photosContainer');
	}
	
}
	
	  if(URL.createObjectURL(event.target.files[6]) != "") {
		alert("لا يمكنك تحديد أكثر من 6 صور ");
		$('#photos').val("");
		 $(".p").remove();
	}
	 



							});
							</script>    

@endsection