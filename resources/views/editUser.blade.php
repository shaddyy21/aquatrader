@extends('templates.main')
        
@section('content')
			<h2>Edit Profile</h2>
			{!! Form::model($user,array('url' => 'user/'.$user->id,'method'=> 'put')) !!}
				<fielset>
					{!! Form::label('firstname', 'First Name') !!}
					{!! Form::text('firstname') !!}
                    {!! $errors->first('First_Name','<p class="error">:message</p>')!!}
					
					{!! Form::label('lastname', 'Last Name') !!}
					{!! Form::text('lastname') !!}
                    {!! $errors->first('Last_Name','<p class="error">:message</p>')!!}
					
					{!! Form::label('email', 'E-mail') !!}
					{!! Form::text('email') !!}
					{!! $errors->first('E-mail','<p class="error">:message</p>')!!}
					
					{!! Form::label('username', 'User Name:') !!}
					{!! Form::text('username') !!}
					{!! $errors->first('Username','<p class="error">:message</p>')!!}
					
					<input type="submit" value="Update profile">
				</fielset>
				
            {!! Form::close() !!}
@stop