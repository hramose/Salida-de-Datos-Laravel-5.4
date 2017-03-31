@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Listado de productos</div>

                <div class="panel-body">
                	{!! Form::open(['route' => 'listProducts', 'method' => 'GET']) !!}
                		<div class="row">
                			<div class="col-sm-10">
                				{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Buscar por palabras...']) !!}
                			</div>
                			<div class="col-sm-2">
                				{!! Form::submit('FILTRAR', ['class' => 'btn btn-primary']) !!}
                			</div>
                		</div>
                	{!! Form::close() !!}
                    <table class="table table-hover table-striped">
						<thead>
							<tr>
								<th width="20px">ID</th>
								<th>Nombre del producto</th>
								<th>Autor</th>
							</tr>
						</thead>
						<tbody>
							@foreach($products as $product)
							<tr>
								<td>{{ $product->id }}</td>
								<td>
									<strong>{{ $product->name }}</strong>
									{{ $product->short }}
								</td>
								<td>
									{{ $product->user->name }}
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					@if($paginate)
						{!! $products->render() !!}
					@else
					<div class="btn-group" role="group">
                        <a href="{{ route('pdf') }}" class="btn btn-default">
                            PDF
                        </a>
                      <a href="{{ route('xls') }}" class="btn btn-default">XLS</a>
                    </div>
					@endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection