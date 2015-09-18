@extends('templates.main')

@section('title')
    {{$product->name}}
@stop


@section('content')			
	<h2>{{$product->type->name}}</h2>
		<article class="group">
			<img src="{{asset('productphotos/'.$product->photo)}}" alt="">
			<h4>{{$product->name}}</h4>
			<p>{{$product->description}}</p>
			<span class="price"><i class="icon-dollar"></i> 4.00</span>
			<span id=addtocart class="addtocart"><i class="icon-plus"></i></span>
            <div class="addCart animated show">
				    {!! Form::open(['url' => 'cartitems']) !!}
				    {!! Form::label('quantity','Quantity', array('class' => 'QtyLabel')) !!}
					{!! Form::selectRange('quantity', 1,10, null, array('class' => 'QtyInput')) !!} 
					{!! Form::submit('Add to cart', ['class' => 'btnCart']) !!}
                    {!! Form::hidden('id',$product->id) !!}
				    {!! Form::close() !!}
				    <span class="close"><i class="fa fa-times"></i></span>
				</div>
        </article>
@stop		
