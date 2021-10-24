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
                            <td>{{ \Carbon\Carbon::parse($post->created_at)->format('d/m/Y') }}</td>
                            <td>
                              <a href="{{ route('posts.edit', $post) }}"><i class="fa fa-edit"></i></a>

                              <form action="{{ route('posts.destroy', $post) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="border-0 text-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                              </form>
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