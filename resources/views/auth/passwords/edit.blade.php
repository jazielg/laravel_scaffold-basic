@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  Atualizar senha
                </div>

                <div class="card-body">
                    @include('components.info')

                    <form action="{{ route('auth.password.update') }}" method="POST">
                      @method('PUT')
                      @csrf

                      <div class="form-group">
                        <label for="old_password">Senha atual</label>
                        <input type="password" name="old_password" id="old_password" class="form-control" placeholder="Digite sua senha atual" required>
                      </div>

                      <div class="form-group">
                        <label for="password">Nova senha</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Digite sua nova senha" required>
                      </div>

                      <div class="form-group">
                        <label for="password_confirmation">Confirmar nova senha</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Confirme sua nova senha" required>
                      </div>

                      <div class="form-group">
                        <a href="{{ route('auth.user.edit') }}">Voltar</a>
                      </div>

                      <div class="form-group">
                        {{ Form::submit('Submit', ['class' => 'btn btn-primary float-right']) }}
                      </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection