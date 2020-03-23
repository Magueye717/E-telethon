@extends('base')
@section('content')
{{ Form::open(array('route' => 'besoins.create', 'method' => 'POST')) }}
<div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      @include('besoins.Partials._form')
    </div>
  </div>
{{ Form::close() }}
@endsection