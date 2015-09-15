@extends('templates.main')

@section('title')
    Login
@stop
        
@section('content')
			<h2>Login</h2>
			{!! Form::open(['url' => 'login']) !!}
				<fielset>
					{!! Form::label('username', 'User Name:') !!}
					{!! Form::text('username') !!}
					{!! $errors->first('username','<p class="error">:message</p>')!!}
					
					{!! Form::label('password', 'Password:') !!}
					{!! Form::password('password') !!}
                    {!! $errors->first('password','<p class="error">:message</p>')!!}
					
					<input type="submit" id="sub" value="Login">
				</fielset>
				
            {!! Form::close() !!}
@stop