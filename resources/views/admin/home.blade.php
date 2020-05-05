@extends('adminlte::page')

@section('plugins.Chartjs', true)

@section('title', 'Painel')

@section('content_header')

    <div class="row">
        <div class="col-md-6">
            <h1>Painel de controle</h1>

        </div>

        <div class="col-md-3">

        </div>

        <div class="col-md-3">

            <form method=get>
                <select onchange="this.form.submit()" name="interval" class=" form-control">
                    <option {{$dateInterval==30? "selected='select'": ''}} value="30">Últimos 30 dias</option>
                    <option {{$dateInterval==60? "selected='select'": ''}} value="60">Últimos 2 meses</option>
                    <option {{$dateInterval==90? "selected='select'": ''}} value="90">Últimos 3 meses</option>
                    <option {{$dateInterval==120? "selected='select'": ''}} value="120">Últimos 6 meses</option>
    
                </select>
            </form>
         
        </div>
    </div>


@endsection


@section('content')

    <div class="row">


        <div class="col-md-3">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3> {{$visitsCount}} </h3>
                    <p>Acessos</p>
                </div>

                <div class="icon">
                    <i class="far fa-fw fa-eye"></i>
                </div>

            </div>

        </div>




        <div class="col-md-3">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3> {{$onlineCount}} </h3>
                    <p>Usuários Online</p>
                </div>

                <div class="icon">
                    <i class="far fa-user"></i>
                </div>

            </div>

        </div>





        <div class="col-md-3">
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3> {{$pageCount}} </h3>
                    <p>Páginas criadas</p>
                </div>

                <div class="icon">
                    <i class="far fa-file-word"></i>
                </div>

            </div>

        </div>




        <div class="col-md-3">
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3> {{$userCount}} </h3>
                    <p>Total de usuários</p>
                </div>

                <div class="icon">
                    <i class="fas fa-users"></i>
                </div>

            </div>

        </div>





    </div>


    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Páginas mais visitadas</h3>
                </div>

                <div class="card-body">
                    <canvas id="pagePie">

                    </canvas>
                </div>
            </div>
        </div>  


        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Sobre o sistema</h3>
                </div>

                <div class="card-body">
                    ...
                </div>
            </div>
        </div>  

    </div>

<script>
    window.onload = function(){
        let context = document.getElementById('pagePie').getContext('2d');
        window.pagePie = new Chart(context, {
            type: 'pie',
            data: {
                datasets: [{
                    data: {{$pageValues}},
                    backgroundColor: '#0000FF'
                }],
                labels: {!! $pageLabels  !!}
            },
            options:{
                responsive: true,
                legend:{
                    display: false
                }
            },

        });
    }
</script>

    
    
@endsection




