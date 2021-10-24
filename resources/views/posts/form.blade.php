@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  @if ($action === 'insert') 
                    Cadastrar 
                  @else 
                    Editar 
                  @endif 
                  Post
                </div>

                <div class="card-body">
                    @include('components.info')

                    @if ($action ==='insert')
                      {{ Form::open(array('route' => "posts.store" )) }}
                    @else
                      {{ Form::model($data, array('route' => array('posts.update', $data), 'method' => 'PUT')) }}
                      {{ Form::hidden('id', null, array('id' => 'id')) }}
                    @endif

                      <div class="form-group">
                        {{ Form::label('title', 'Título') }}
                        {{ Form::text('title', null , array('required', 'id' => 'title', 'class'=>'form-control', 'placeholder'=>'Digite o titulo')) }}
                      </div>

                      <div class="form-group">
                        {{ Form::label('body', 'Conteúdo'); }}
                        {{ Form::textarea('body', null, array('required', 'id' => 'body', 'class'=>'form-control', 'placeholder'=>'Digite o conteudo')) }}
                      </div>

                      <div class="form-group">
                        {{ Form::label('categories', 'Categoria'); }}
                        {{ Form::select('category_id',  \App\Helpers\ListHelper::getCategories(), null, ['id'=>'category_id', 'class' => 'form-control', 'data-placeholder' => 'Escolha:', 'required']) }}
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