@extends('layouts.master')
@section('title','Hello App')  {{--Customize title for every page--}}
@section('content')
<li>{{$name}} </li>
		<li>{{$id}}</li>
		<li>{{$phone}}</li>
		<li>{{--$address--}}</li>     {{--to comment out the address in blade --}}

@endsection
@section('footer')
<h1> This is footer </h1>
@endsection

	