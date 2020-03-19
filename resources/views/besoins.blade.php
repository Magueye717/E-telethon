{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('libelle', 'Libelle:') !!}
			{!! Form::text('libelle') !!}
		</li>
		<li>
			{!! Form::label('type', 'Type:') !!}
			{!! Form::text('type') !!}
		</li>
		<li>
			{!! Form::label('region', 'Region:') !!}
			{!! Form::text('region') !!}
		</li>
		<li>
			{!! Form::label('quantite', 'Quantite:') !!}
			{!! Form::text('quantite') !!}
		</li>
		<li>
			{!! Form::label('cout', 'Cout:') !!}
			{!! Form::text('cout') !!}
		</li>
		<li>
			{!! Form::label('etat', 'Etat:') !!}
			{!! Form::text('etat') !!}
		</li>
		<li>
			{!! Form::label('user_id', 'User_id:') !!}
			{!! Form::text('user_id') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}