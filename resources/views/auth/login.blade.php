@extends('template')

@section('title')
	 Login
@stop

@section('content')
	
		<h2> Login</h2>

		<form method="POST" action="/auth/login">

			{!! csrf_field() !!}
			
			<div>
				E-mail
				<input type="email" name="email" value="{{ old('email') }}" />
			</div>

			<div>
				Password
				<input type="password" name="password" id="password" />
			</div>

			<div>
				<input type="checkbox" name="remember" /> Remember me
			</div>

			<div>
				<input type="submit" value="Login" >
			</div>

		</form>

@stop