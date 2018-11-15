@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-4 offset-4">
            <div class="card border-primary">
                <div class="card-header">
                    Bienvenido {{ auth()->user()->name }}
                </div>
                <div class="card-body">
                    Email: {{ auth()->user()->email }}
                </div>
                <div class="card-footer">
                    <form action="{{ route('logout') }}" method="post">
                        {{ csrf_field() }}
                        <button class="btn btn-danger btn-sm btn-block">Cerrar sesion</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
