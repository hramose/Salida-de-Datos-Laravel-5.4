@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    	@foreach($products as $product)
        <div class="col-sm-4">
            <img src="{{ $product->image }}" class="img-responsive">
            <h3>{{ $product->name }}</h3>
            <p>{{ $product->text_short }}</p>
            <p>
            	<a href="{{ route('product', $product->id) }}" class="btn btn-primary">
            		ver más
            	</a>
            </p>
        </div>
        @endforeach
        {!! $products->render() !!}
    </div>
</div>
@endsection
