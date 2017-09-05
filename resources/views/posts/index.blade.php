@extends('template')

@section('title')
	Blog do Tácio
@stop

@section('content')
	
	@foreach ( $posts as $post )
		<h2>{{ $post->title }} <small>({{ $post->created_at }})</small></h2>
		<p>{{ $post->content }}</p>
		<hr />
	@endforeach

@stop