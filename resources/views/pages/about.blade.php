@extends('layout.master')
@section('content')
<h1> {{$title}}</h1>
<ul class="list-group">
	@foreach($about as $services)
<li class="list-group-item">{{$services}}	</li>
@endforeach
	</ul>
@endsection
