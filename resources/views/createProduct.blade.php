@extends('templates.main')
        
@section('content')
			<h2>Add new product</h2>
			{!! Form::open(array('url' => 'products')) !!}
				<fielset>
				
					{!! Form::label('name', 'Product Name') !!}
					{!! Form::text('name') !!}
					
					{!! Form::label('description', 'Description') !!}
					{!! Form::textarea('description') !!}
					
					{!! Form::label('price', 'Price') !!}
					{!! Form::text('price') !!}
					
					{!! Form::label('photo', 'Photo') !!}
					{!! Form::text('photo',"shubunkin.jpg") !!}
					
					{!! Form::label('type_id', 'Product type') !!}
					{!! Form::select('type_id',\App\Models\Type::lists("name","id")) !!}
					
					<input type="submit" value="Create product">
				</fielset>
				
            {!! Form::close() !!}
@stop