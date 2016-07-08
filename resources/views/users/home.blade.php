@extends ('layouts.master')

@section('content')
	
	<h3>Homepage for user {{ \Auth::user()-> name }}</h3>
	
@endsection