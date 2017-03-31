<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <div class="container">
	    <div class="row">
	        <div class="col-xs-12">          
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
			</div>
	    </div>
	</div>
</body>
</html>