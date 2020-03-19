{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('libelle', 'Libelle:') !!}
			{!! Form::text('libelle') !!}
		</li>
		<li>
			{!! Form::label('rc', 'Rc:') !!}
			{!! Form::text('rc') !!}
		</li>
		<li>
			{!! Form::label('ninea', 'Ninea:') !!}
			{!! Form::text('ninea') !!}
		</li>
		<li>
			{!! Form::label('identification', 'Identification:') !!}
			{!! Form::text('identification') !!}
		</li>
		<li>
			{!! Form::label('cni', 'Cni:') !!}
			{!! Form::text('cni') !!}
		</li>
		<li>
			{!! Form::label('contact_id', 'Contact_id:') !!}
			{!! Form::text('contact_id') !!}
		</li>
		<li>
			{!! Form::label('besoin_id', 'Besoin_id:') !!}
			{!! Form::text('besoin_id') !!}
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