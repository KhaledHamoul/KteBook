{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('prod_id', 'Prod_id:') !!}
			{!! Form::text('prod_id') !!}
		</li>
		<li>
			{!! Form::label('chemin', 'Chemin:') !!}
			{!! Form::text('chemin') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}