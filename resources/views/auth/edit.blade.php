@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  Perfil
                </div>

                <div class="card-body">
                    @include('components.info')

                    {{ Form::model($data, array('route' => array('auth.user.update'), 'method' => 'PUT')) }}

                      <div class="form-group">
                        {{ Form::label('name', 'Nome') }}
                        {{ Form::text('name', null , array('required', 'id' => 'name', 'class'=>'form-control', 'placeholder'=>'Digite seu nome')) }}
                      </div>

                      <div class="form-group">
                        {{ Form::label('email', 'Email'); }}
                        {{ Form::email('email', null , array('required', 'id' => 'email', 'class'=>'form-control', 'placeholder'=>'Digite seu email')) }}
                      </div>

                      <div class="form-group">
                        <a href="{{ route('auth.password.edit') }}">Atualizar senha</a>
                      </div>

                      <div class="form-group">
                        {{ Form::submit('Submit', ['class' => 'btn btn-primary float-right']) }}
                      </div>

                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection