@extends('template')

@section('title')
	 {{ $post->title }} :: Blog do Tácio
@stop

@section('content')
	
		<h2> {{ $post->title }}</h2>

		<div>{{ $post->content }}</div>	

@stop