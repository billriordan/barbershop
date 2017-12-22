@extends('layouts.app')

@section('content')
<ul>
@foreach($barbers as $barber)
	<li>
		{{ $barber->name }}
	</li>
@endforeach
</ul>