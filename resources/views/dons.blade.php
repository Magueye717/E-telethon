{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('donateur_id', 'Donateur_id:') !!}
			{!! Form::text('donateur_id') !!}
		</li>
		<li>
			{!! Form::label('montant', 'Montant:') !!}
			{!! Form::text('montant') !!}
		</li>
		<li>
			{!! Form::label('besoin_id', 'Besoin_id:') !!}
			{!! Form::text('besoin_id') !!}
		</li>
		<li>
			{!! Form::label('type_don', 'Type_don:') !!}
			{!! Form::text('type_don') !!}
		</li>
		<li>
			{!! Form::label('nombre_unite', 'Nombre_unite:') !!}
			{!! Form::text('nombre_unite') !!}
		</li>
		<li>
			{!! Form::label('statut', 'Statut:') !!}
			{!! Form::text('statut') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}