{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('jeton_id', 'Jeton_id:') !!}
			{!! Form::text('jeton_id') !!}
		</li>
		<li>
			{!! Form::label('don_id', 'Don_id:') !!}
			{!! Form::text('don_id') !!}
		</li>
		<li>
			{!! Form::label('nombre_unite', 'Nombre_unite:') !!}
			{!! Form::text('nombre_unite') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}