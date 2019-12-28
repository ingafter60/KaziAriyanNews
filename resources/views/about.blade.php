@extends('master')

@section('sidebar')
	@parent
	<p>Under at parent</p>
@endsection

@section('component')	

<h1>About page</h1>
<p>Firstname: <?php echo $fname; ?></p>
<p>Lastname: <?php echo $lname; ?></p>

<hr>

<p>Firstname: {{ $fname }}</p>
<p>Lastname: {{ $lname }}</p>

<hr>

@php
	$name = "ING";
	echo $name;
@endphp	

@endsection