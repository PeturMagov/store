@extends('layouts.app')

@section('content')
	<div class="card">
		<div class="card-header text-center">
			Add a new brand
		</div>
		<div class="card-body">
			@include('errors.errors')
			{{ Form::model($brands, ['route' => 'brands']) }}
			{{ Form::token() }}
			{{ Form::label('name')}}
			{{ Form::text('name', null, ['class' => 'form-control']) }}
			<br>
			<div class="text-center">
			{{ Form::submit('Submit', ['class' => 'btn btn-success']) }}
			</div>
			{{ Form::close() }}
		</div>
	</div>
@endsection