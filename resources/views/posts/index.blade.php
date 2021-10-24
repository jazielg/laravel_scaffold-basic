@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Listagem de Posts</div>

                <a href="/posts/create">Criar</a>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Título</th>
                          <th scope="col">Status</th>
                          <th scope="col">Criado em</th>
                          <th scope="col">Ações</th>
                        </tr>
                      </thead>

                      <tbody>
                        @foreach ($posts as $post)
                          <tr>
                            <th scope="row">{{ $post->id }}</th>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->active }}</td>
                            <td>{{ $post->created_at }}</td>
                            <td>
                              <a href="/posts/{{ $post->id }}/edit">Editar</a>
                            </td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection