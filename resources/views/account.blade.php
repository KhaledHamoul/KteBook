@extends('header')

@section('contenu')

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
					 
					<form  method="POST" action="{{ route('register') }}">
						{!! csrf_field() !!}   
					<div class="account-top heading">
						<h3>حساب جديد</h3>
					</div>
					<div class="address">
						<span>الإسم</span>
						<input type="text" name="nom">
					</div>
					<div class="address">
						<span>اللقب</span>
						<input type="text" name="prenom">
					</div>
					<div class="address">
						<span>إسم المستخدم</span>
						<input type="text" name="userName">
					</div>
					<div class="address">
						<span>البريد الإلكتروني</span>
						<input type="email" name="email">
					</div>
					<div class="address">
						<span>كلمة المرور</span>
						<input type="password" name="password">
					</div>
					<div class="address">
						<span>تأكيد كلمة المرور</span>
						<input type="password" name="password_confirmation">
					</div>
					<div class="address">
						<span>الولاية</span>
		<select class="select" id="email" name="wilaya" required >
				<option value = "">-----</option>
				<option value = "أدرار">أدرار</option>
				<option value = "شلف">شلف</option>
				<option value = "الأغواط">الأغواط</option>
				<option value = "أم البواقي">أم البواقي</option>
				<option value = "باتنة5">باتنة</option>
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
				<option value = "برج بوعريريج">برج بوعريريج</option>
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
			    <option value = "عين تموشنت">عين تموشنت</option>
				<option value = "غرداية">غرداية</option>
				<option value = "غيليزان">غيليزان</option>
		</select>

			         </div>

					<div class="address new">
						<input type="submit" value="تسجيل">
					</div>
					</div>
				</form>
					
				</div>
				<div class="col-md-6 account-left">
					<form method="POST" action="{{ route('login') }}">
						{!! csrf_field() !!}   
					<div class="account-top heading">
						<h3>تسجيل الدخول</h3>
					</div>
					<div class="address">
						<span>عنوان البريد الإلكتروني</span>
						<input type="email" name="email" value="{{ old('email') }}" required >
						 @if ($errors->has('email'))
                                    <span>
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
					</div>
					<div class="address">
						<span>كلمة المرور</span>
						<input type="password" name="password" required >
						 @if ($errors->has('password'))
                                    <span >
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
					</div>
					<div class="address">
						<input type="submit" value="دخول">
						<a class="forgot"  href="{{ route('password') }}">هل نسيت كلمة المرور؟</a>
						
					</div>
				</div>
				</form>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--end-account-->
	

	@endsection