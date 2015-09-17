@extends('templates.main')

@section('title')
    {{$type->name}}
@stop

@section('content')
  <h2>{{$type->name}}</h2>
  
  @foreach($type->products as $product)
			<article class="group">
				<img src="{{asset('productphotos/'.$product->photo)}}" alt="">
				<h4>{{$product->name}}</h4>
				<p>{{$product->description}}</p>
				<span class="price"><i class="icon-dollar"></i>{{$product->price}}</span>
				<span class="addtocart"><i class="icon-plus"></i></span>
				<div class="addCart animated hide">
				    {!! Form::open(['url' => 'types']) !!}
				    {!! Form::label('qty','Quantity', array('class' => 'QtyLabel')) !!}
					{!! Form::selectRange('qty', 1,10, null, array('class' => 'QtyInput')) !!}
                    {!! Form::submit('Add to cart', ['class' => 'btnCart']) !!}
				    {!! Form::close() !!}
				    <span class="close"><i class="fa fa-times"></i></span>
				</div>
			</article>
    @endforeach
@stop