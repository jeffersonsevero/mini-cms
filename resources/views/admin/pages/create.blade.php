@extends('adminlte::page')


@section('title', 'Nova página')


@section('content_header')
    <h1> Nova página  </h1>
    
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

            <form action=" {{route('pages.store')}} " method="POST" class="form-horizontal" >
                @csrf
        
                <div class="form-group">
                    <label class="col-sm-4 col-form-label"> Título: </label>
                    <div class="col-sm-8">
                        <input type="text" name="title" value=" {{old('title')}} " class="form-control  @error('title') is-invalid   @enderror  " >
                    </div>
                </div>
        
        
                <div class="form-group">
                    <label class="col-sm-4 col-form-label"> Corpo: </label>
                    <div class="col-sm-8">
                        <textarea name="body" class="form-control body-field" > {{old('body')}} </textarea>

                    </div>
                </div>
        
        
        
        
                <div class="form-group">
                    <div class="col-sm-8">
                        <input type="submit" name="acao" value="Criar" class="btn btn-success">
                    </div>
                </div>
            
            </form>
        

        </div>

    </div>



    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js"></script>
    <script>
    
    tinymce.init({
        selector: 'textarea.body-field',
        height: 300,
        menubar: false,
        plugins: ['link', 'table', 'image', 'autoresize', 'lists'],
        toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | table | link image | bulllist numlist',
        content_css: [
            '{{asset('assets/css/content.css')}}'    
        ],
        images_upload_url: ' {{route('imageupload')}} ',
        images_upload_credentials: true,
        convert_urls: false
    
    });    
    
    </script>
    




@endsection
    