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
					 
				
					
				</div>
				<div class="col-md-5"  >
				@if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
					<form  method="POST" action="{{ route('password.request') }}">
						{!! csrf_field() !!}   
						
						 <input type="hidden" name="token" value="{{ $token }}">
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
						<span>كلمة المرور</span>
						<input type="password" name="password">
					</div>
					 @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
					<div class="address">
						<span>تأكيد كلمة المرور</span>
						<input type="password" name="password_confirmation">
					</div>
					@if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
					
					<div class="address">
						<input type="submit" value="تأكيد">
						
						
					</div>
				</div>
				</form>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--end-account-->

	
@endsection