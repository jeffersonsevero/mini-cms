@extends('adminlte::page')


@section('title', 'Usuários')


@section('content_header')
    <h1>Meus usuários  <a class="btn btn-success" href=" {{route('users.create')}} "> <i class="fas fa-user-plus"></i> Novo usuário</a>   </h1>
    
@endsection



@section('content')

    <div class="card">
        <div class="body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Ações</th>
            
                    </tr>
                </thead>

                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td> {{$user->id}} </td>
                        <td> {{$user->name}} </td>
                        <td> {{$user->email}} </td>
                        <td>
                            <a href=" {{ route('users.edit', ['user' => $user->id])}} " class="btn  btn-info">Editar</a>
                            @if ($loggedId !== intval($user->id))
                                <form class="d-inline" method="POST" action="{{route('users.destroy', ['user' => $user->id])}}"  onsubmit="return confirm('Tem certeza que deseja excluir?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" >Excluir</button>
                                </form>

                            @endif

                        
        
                        </td>
                    </tr>
                @endforeach

                </tbody>
        
              
            </table>


        </div>

    </div>



    {{$users->links()}}
    
@endsection
    