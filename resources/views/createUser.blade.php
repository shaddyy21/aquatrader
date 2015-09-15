@extends('templates.main')

@section('title')
    Create Account
@stop

@section('content')
			<h2>Create new Account</h2>
			{!! Form::open(array('url' => 'users')) !!}
				<fielset>
					{!! Form::label('firstname', 'First Name:') !!}
					{!! Form::text('firstname') !!}
                    {!! $errors->first('firstname','<p class="error">:message</p>')!!}
                    
                    {!! Form::label('lastname', 'Last Name:') !!}
					{!! Form::text('lastname') !!}
                    {!! $errors->first('lastname','<p class="error">:message</p>')!!}
					
					{!! Form::label('email', 'E-Mail:') !!}
					{!! Form::text('email') !!}
                    {!! $errors->first('email','<p class="error">:message</p>')!!}
					
					{!! Form::label('username', 'User Name:') !!}
					{!! Form::text('username') !!}
					{!! $errors->first('username','<p class="error">:message</p>')!!}
					
					{!! Form::label('password', 'Password:') !!}
					{!! Form::password('password') !!}
                    {!! $errors->first('password','<p class="error">:message</p>')!!}
					
					{!! Form::label('password_confirmation', 'Confirm Password:') !!}
					{!! Form::password('password_confirmation') !!}
                    {!! $errors->first('password_confirmation','<p class="error">:message</p>')!!}
					
					<input type="submit" id="sub" value="Create account">
				</fielset>
				
            {!! Form::close() !!}
@stop