@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-5">
            <img src="{{ $product->image }}" class="img-responsive">            
        </div>
        <div class="col-sm-7">
        	<h3>{{ $product->name }}</h3>
            <p>{{ $product->short }}</p>
            <hr>            
            <p>{{ $product->body }}</p>
        </div>
    </div>
</div>
@endsection