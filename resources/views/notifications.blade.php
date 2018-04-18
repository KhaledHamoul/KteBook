{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('user_id', 'User_id:') !!}
			{!! Form::text('user_id') !!}
		</li>
		<li>
			{!! Form::label('contenu', 'Contenu:') !!}
			{!! Form::text('contenu') !!}
		</li>
		<li>
			{!! Form::label('lien', 'Lien:') !!}
			{!! Form::text('lien') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}