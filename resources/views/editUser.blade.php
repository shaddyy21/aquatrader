@extends('templates.main')
        
@section('content')
			<h2>Edit product</h2>
			{!! Form::model($product,array('url' => 'products/'.$product->id,'method'=> 'put')) !!}
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
					
					<input type="submit" value="Update product">
				</fielset>
				
            {!! Form::close() !!}
@stop