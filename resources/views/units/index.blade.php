@extends('layouts.app')

@section('content')	
{{ Form::model($units, ['route' => 'units', 'method' => 'get']) }}
{{ Form::token() }}
<div class="input-group">
{{ Form::text('number', Input::get('number'), ['placeholder' => 'Search number', 'class' => 'form-control']) }}
{{ Form::text('product', Input::get('product'), ['placeholder' => 'Search product', 'class' => 'form-control']) }}
{{ Form::submit('Search', ['class' => 'btn btn-success']) }}
</div>
{{ Form::close() }}
<br>
	<div class="card">
		<div class="card-header text-center">
			All Units
		</div>	
		@include('units.form')	
	</div>
@endsection