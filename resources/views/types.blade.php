@extends('templates.main')

@section('title')
    {{$type->name}}
@stop

@section('content')
  <h2>{{$type->name}}</h2>
  
  <?php $products = $type->products()->paginate(6);
    $products->setPath("");
  ?>
  @foreach($products as $product)
			<article class="group">
				<img src="{{asset('productphotos/'.$product->photo)}}" alt="">
				<h4>{{$product->name}}</h4>
				<p>{{$product->description}}</p>
				<span class="price"><i class="icon-dollar"></i>{{$product->price}}</span>
                <span class="addtocart"><i class="icon-plus"></i></span>
                    <div class="addCart animated hide">
				    {!! Form::open(['url' => 'cartitems']) !!}
				    {!! Form::label('quantity','Quantity', array('class' => 'QtyLabel')) !!}
					{!! Form::selectRange('quantity', 1,10, null, array('class' => 'QtyInput')) !!} 
					{!! Form::submit('Add to cart', ['class' => 'btnCart']) !!}
                    {!! Form::hidden('id',$product->id) !!}
				    {!! Form::close() !!}
				    
				    {!! Form::open(['url' => 'products/'.$product->id, 'method'=>'delete']) !!}
				    {!! Form::submit('Delete') !!}
				    {!! Form::close() !!}
				    <span class="close"><i class="fa fa-times"></i></span>
				</div>
                       
                </span>
			</article>
    @endforeach
    
    {!! $products->render() !!}
@stop