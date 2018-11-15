@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-4 offset-4">
            <div class="card border-primary">
                <div class="card-header">
                    <h4 class="card-title text-center">Acceso a sistema de tutorias</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('login') }}" method="post">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <label class="lead" for="email">
                                Email
                            </label>
                            <input class="form-control border-primary"
                                   type="email"
                                   name="email"
                                   id=""
                                   value="{{ old('email') }}"
                                   placeholder="alguien@ejemplo.com">
                            {!! $errors->first('email','<span class="text-danger">:message</span>') !!}
                        </div>
                        <div class="form-group">
                            <label class="lead" for="password">
                                Contraseña
                            </label>
                            <input class="form-control border-primary"
                                   type="password" name="password" id="">
                            {!! $errors->first('password','<span class="text-danger">:message</span>') !!}
                        </div>
                        <button class="btn btn-primary btn-block">Ingresar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection()
