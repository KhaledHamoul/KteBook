{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('email', 'Email:') !!}
			{!! Form::text('email') !!}
		</li>
		<li>
			{!! Form::label('user_name', 'User_name:') !!}
			{!! Form::text('user_name') !!}
		</li>
		<li>
			{!! Form::label('nom', 'Nom:') !!}
			{!! Form::text('nom') !!}
		</li>
		<li>
			{!! Form::label('prenom', 'Prenom:') !!}
			{!! Form::text('prenom') !!}
		</li>
		<li>
			{!! Form::label('passwd', 'Passwd:') !!}
			{!! Form::text('passwd') !!}
		</li>
		<li>
			{!! Form::label('wilaya', 'Wilaya:') !!}
			{!! Form::text('wilaya') !!}
		</li>
		<li>
			{!! Form::label('photo_user', 'Photo_user:') !!}
			{!! Form::text('photo_user') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}