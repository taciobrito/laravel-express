@extends('template')

@section('title')
	Blog do Tácio
@stop

@section('content')
	
	@foreach ( $posts as $post )
		<h2>{{ $post->title }} <small>({{ $post->created_at }})</small></h2>
		<p>{{ $post->content }}</p>

		<p>
			<strong>Tags: </strong>
				@foreach ( $post->tags as $key => $tag )
					@if ( $key > 0 ) | @endif 
					{{ $tag->name }}
				@endforeach
		</p>
		<h3>
			Comments: 
				@if ( count( $post->comments ) == 0 ) 
					0 
				@else 
					{{ count( $post->comments ) }} 
				@endif
		</h3>
		@foreach ( $post->comments as $comment )
			<strong>Name: </strong> {{ $comment->name }} <br />
			<strong>Comment: </strong> {{ $comment->comment }} <br />
		@endforeach

		<hr />

	@endforeach

@stop