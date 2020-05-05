@extends('adminlte::page')


@section('title', 'Novo usuário')


@section('content_header')
    <h1> Novo usuário  </h1>
    
@endsection



@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                <h5> <i class="icon fas fa-ban"> </i>  Ocorreu um erro!</h5>

            @foreach ($errors->all() as $erro)
                <li> {{$erro}} </li>
            @endforeach
            </ul>
        </div>
    @endif

    <div class="card">
    

        <div class="card-body">

            <form action=" {{route('users.store')}} " method="POST" class="form-horizontal" >
                @csrf
        
                <div class="form-group">
                    <label class="col-sm-4 col-form-label"> Nome Completo: </label>
                    <div class="col-sm-8">
                        <input type="text" name="name" value=" {{old('name')}} " class="form-control  @error('name') is-invalid   @enderror  " >
                    </div>
                </div>
        
        
                <div class="form-group">
                    <label class="col-sm-4 col-form-label"> E-mail: </label>
                    <div class="col-sm-8">
                        <input type="email" value=" {{old('email')}} " name="email" class="form-control  @error('name') is-invalid   @enderror  ">
                    </div>
                </div>
        
        
                <div class="form-group">
                    <label class="col-sm-4 col-form-label"> Senha: </label>
                    <div class="col-sm-8">
                        <input type="password" name="password"  class="form-control  @error('name') is-invalid   @enderror  ">
                    </div>
                </div>
        
        
                <div class="form-group">
                    <label class="col-sm-4 col-form-label"> Confirmação de senha: </label>
                    <div class="col-sm-8">
                        <input type="password" name="password_confirmation"  class="form-control  @error('name') is-invalid   @enderror  ">
                    </div>
                </div>
        
        
                <div class="form-group">
                    <div class="col-sm-8">
                        <input type="submit" name="acao" value="Cadastrar" class="btn btn-success">
                    </div>
                </div>
            
            </form>
        

        </div>

    </div>







@endsection
    