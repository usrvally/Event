<!DOCTYPE html>
<html>
<head>
	<title>Events</title>
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="{{asset('/css/app.css')}}">
	<style>
		.error{
			color: red;
			font-weight: bold;
			font-style: italic;
		}
	</style>
</head>
<body>
	@include('layouts.partials._nav')

	<div class="container">

		@if(Session::has('notification.message'))
		<div class="alert alert-{{Session::get('notification.type')}}">
		    {{ Session::get('notification.message') }}
		</div>
		@endif
		@yield('content')
	</div>
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="{{asset('/js/larails.js') }}"></script>
	@include('flashy::message')
	
</body>
</html>