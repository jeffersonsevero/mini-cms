@extends('site.layout')

@section('title', $page['title'])
    
@section('content')


    <!-- bradcam_area  -->
    <div class="bradcam_area " style="background: {{$front_config['bgcolor']}} ">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3> {{$page['title']}} </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /bradcam_area  -->


    <div class="container mt-5 mb-5">
        {!!  $page['body']  !!}
    </div>
    
@endsection