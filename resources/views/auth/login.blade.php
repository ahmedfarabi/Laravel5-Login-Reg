@extends ('layouts.master')

@section('content')

<div class="container" style="width:500px; background-color:lightgrey; padding:30px 30px 60px 30px">

	<h2>Login</h2>
	@if(count($errors))
		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif
	
	{!! Form::open(array('route' => 'handleLogin')) !!}
		
	
			<div class="form-group">
				{!! Form::label('email') !!}
				{!! Form::text('email',null,array('class' => 'form-control')) !!}
			</div>
			<div class="form-group">
				{!! Form::label('password') !!}
				{!! Form::text('password',null,array('class' => 'form-control')) !!}
			</div>

		{!! Form::token() !!}
		{!! Form::submit(null,array('class' => 'btn btn-default')) !!}
	{!! Form::close() !!}
					
</div>
@endsection