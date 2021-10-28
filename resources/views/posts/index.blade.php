@extends('layouts.app') @section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="px-3 py-3 mx-auto text-center">
      <h1 class="display-5">Posts</h1>
    </div>
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">Pesquisa de Posts</div>

        <div class="card-body">

            {{ Form::model($_GET, array('route' => array('posts.index'), 'method' => 'GET')) }}
            <div class="form-row">

              <div class="form-group col-md-3">
                {{ Form::label('title', 'Título') }}
                {{ Form::text('title', null , array('id' => 'title', 'class'=>'form-control', 'placeholder'=>'Digite o titulo')) }}
              </div>

              <div class="form-group col-md-3">
                {{ Form::label('categories', 'Categoria') }}
                {{ Form::select('category_id',  \App\Helpers\ListHelper::getCategories(), null, ['id'=>'category_id', 'class' => 'form-control', 'data-placeholder' => 'Escolha:']) }}
              </div>

              <div class="form-group col-md-3">
                {{ Form::label('active', 'Ativo') }}
                {{ Form::select('active',  array('' => 'Selecione', '0' => 'Inativo', '1' => 'Ativo'), null, ['id'=>'active', 'class' => 'form-control', 'data-placeholder' => 'Escolha:']) }}
              </div>

              <div class="form-group col-md-3 mt-2">
                {{ Form::submit('Pesquisar', ['class' => 'btn btn-primary mt-4']) }}
              </div>

            </div>
            {{ Form::close() }}

        </div>
      </div>
    </div>

    <div class="col-md-12 mt-5">
      <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
          <span>
            Listagem de Posts
          </span> 
          <a href="/posts/create" class="btn btn-primary">Novo registro</a>
        </div>


        <div class="card-body">
          @if (session('status'))
          <div class="alert alert-success" role="alert">
            {{ session("status") }}
          </div>
          @endif

          <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Título</th>
                <th scope="col">Ativo</th>
                <th scope="col">Categoria</th>
                <th scope="col">Criado em</th>
                <th scope="col">Ações</th>
              </tr>
            </thead>

            <tbody>
              @foreach ($posts as $post)
              <tr>
                <th scope="row">{{ $post->id }}</th>
                <td>{{ $post->title }}</td>
                <td>
                  @if($post->active)
                    <span class="badge badge-success">Ativo</span> 
                  @else 
                    <span class="badge badge-danger">Inativo</span>
                  @endif
                </td>
                <td>{{ $post->category->name }}</td>
                <td>
                  {{ \Carbon\Carbon::parse($post->created_at)->format('d/m/Y') }}
                </td>
                <td style="width:8%">
                  <div class="d-flex align-items-center justify-content-around">
                    <a href="{{ route('posts.edit', $post) }}"><i class="fa fa-edit"></i></a>
  
                    <form action="{{route('posts.destroy', $post)}}" method="post">
                      @csrf @method('DELETE')
                      <button type="submit" class="border-0 text-danger bg-white">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                      </button>
                    </form>
                  </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>

          <div class="d-flex align-items-center justify-content-between">
            <div>
              <span>Mostrando {{ $posts->count() }} de
                {{ $posts->total() }} registros</span>
            </div>
            <div>
              {{ $posts->appends($_GET)->links('pagination::bootstrap-4') }}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection