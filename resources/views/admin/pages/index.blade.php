@extends('adminlte::page')


@section('title', 'Páginas')


@section('content_header')
    <h1> Minhas páginas  <a class="btn btn-success" href=" {{route('pages.create')}} "> <i class="far fa-file"></i> Nova página</a>   </h1>
    
@endsection



@section('content')

    <div class="card">
        <div class="body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Ações</th>
            
                    </tr>
                </thead>

                <tbody>
                    @foreach ($pages as $page)
                    <tr>
                        <td> {{$page->id}} </td>
                        <td> {{$page->title}} </td>
                        <td>

                            <a target="_blank" class="btn btn-success" href="">Ver</a>

                            <a href=" {{ route('pages.edit', ['page' => $page->id])}} " class="btn  btn-info">Editar</a>
                                <form class="d-inline" method="POST" action="{{route('pages.destroy', ['page' => $page->id])}}"  onsubmit="return confirm('Tem certeza que deseja excluir?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" >Excluir</button>
                                </form>


                        
        
                        </td>
                    </tr>
                @endforeach

                </tbody>
        
              
            </table>


        </div>

    </div>



    {{$pages->links()}}
    
@endsection
    