@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  Visualizar Post
                </div>

                <div class="card-body">
                    <div class="row">

                      <div class="col-md-12">
                        <strong>Título</strong>
                        <p>
                          {{ $post->title }}
                        </p>
                      </div>

                      <div class="col-md-12">
                        <strong>Conteúdo</strong>
                        <p>
                          {{ $post->body }}
                        </p>
                      </div>

                      <div class="col-md-12">
                        <strong>Categoria</strong>
                        <p>
                          {{ $post->category->name }}
                        </p>
                      </div>

                      <div class="col-md-12">
                        <a href="{{ route('posts.index') }}">Voltar</a>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection