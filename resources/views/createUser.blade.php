@extends('templates.main')
        
@section('content')
			<h2>Create new Account</h2>
			{!! Form::open(array('url' => 'users')) !!}
				<fielset>
					{!! Form::label('First_Name', 'First Name:') !!}
					{!! Form::text('First_Name') !!}
                    {!! $errors->first('First_Name','<p class="error">:message</p>')!!}
                    
                    {!! Form::label('Last_Name', 'Last Name:') !!}
					{!! Form::text('Last_Name') !!}
                    {!! $errors->first('Last_Name','<p class="error">:message</p>')!!}
					
					{!! Form::label('E-mail', 'E-Mail:') !!}
					{!! Form::text('Email') !!}
                    {!! $errors->first('E-mail','<p class="error">:message</p>')!!}
					
					{!! Form::label('Username', 'User Name:') !!}
					{!! Form::text('Username') !!}
					{!! $errors->first('Username','<p class="error">:message</p>')!!}
					
					{!! Form::label('password', 'Password:') !!}
					{!! Form::password('password') !!}
                    {!! $errors->first('password','<p class="error">:message</p>')!!}
					
					{!! Form::label('password_confirmation', 'Confrim Password:') !!}
					{!! Form::password('password_confirmation') !!}
                    {!! $errors->first('password_confirmation','<p class="error">:message</p>')!!}
					
					<input type="submit" value="Create account">
				</fielset>
				
            {!! Form::close() !!}
@stop