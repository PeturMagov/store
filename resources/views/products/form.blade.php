{{ Form::token() }}
{{ Form::label('name')}}
{{ Form::text('name', null, ['class' => 'form-control']) }}
<br>
{{ Form::label('price')}}
{{ Form::text('price', null, ['class' => 'form-control']) }}
<br>
{{ Form::label('brand')}}
{{ Form::select('brand_id', $brands, null, ['class' => 'form-control']) }}
<br>
<div class="text-center">
{{ Form::submit($btnText, ['class' => 'btn btn-success']) }}
</div>