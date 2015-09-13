@extends('templates.main')
        
@section('content')
			<h2>Edit Profile</h2>
			{!! Form::model($user,array('url' => 'users/'.$user->id,'method'=> 'put')) !!}
				<fielset>
					{!! Form::label('firstname', 'First Name') !!}
					{!! Form::text('firstname') !!}
                    {!! $errors->first('firstname','<p class="error">:message</p>')!!}
					
					{!! Form::label('lastname', 'Last Name') !!}
					{!! Form::text('lastname') !!}
                    {!! $errors->first('lastname','<p class="error">:message</p>')!!}
					
					{!! Form::label('email', 'E-mail') !!}
					{!! Form::text('email') !!}
					{!! $errors->first('email','<p class="error">:message</p>')!!}
					
					<input type="submit" value="Update profile">
				</fielset>
				
            {!! Form::close() !!}
@stop