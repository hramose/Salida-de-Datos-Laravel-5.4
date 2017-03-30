@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Panel administrativo</div>

                <div class="panel-body">
                    <div class="btn-group" role="group">
                        <a href="{{ route('listProducts') }}" class="btn btn-default">
                            Productos
                        </a>
                      <a  class="btn btn-default">Estadísticas</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
